(() => {
  const menuToggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('.site-nav');
  if (menuToggle && nav) {
    menuToggle.addEventListener('click', () => {
      const open = nav.classList.toggle('open');
      menuToggle.setAttribute('aria-expanded', String(open));
      menuToggle.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
    });
    nav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
      nav.classList.remove('open');
      menuToggle.setAttribute('aria-expanded', 'false');
      menuToggle.setAttribute('aria-label', 'Open navigation');
    }));
  }

  const filters = document.querySelectorAll('[data-filter]');
  const projects = document.querySelectorAll('.project-row[data-category]');
  filters.forEach(button => button.addEventListener('click', () => {
    const filter = button.dataset.filter;
    filters.forEach(item => {
      const active = item === button;
      item.classList.toggle('active', active);
      item.setAttribute('aria-pressed', String(active));
    });
    projects.forEach(project => { project.hidden = filter !== 'all' && project.dataset.category !== filter; });
  }));

  const revealItems = document.querySelectorAll('.section, .project-row, .hero-main, .hero-aside, .cv-inner, .contact-body');
  if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const observer = new IntersectionObserver(entries => entries.forEach(entry => {
      if (entry.isIntersecting) { entry.target.classList.add('is-visible'); observer.unobserve(entry.target); }
    }), { threshold: 0.08 });
    revealItems.forEach(item => { item.classList.add('reveal'); observer.observe(item); });
  } else {
    revealItems.forEach(item => item.classList.add('is-visible'));
  }

  function drawBusinessChart() {
    const target = document.getElementById('business-chart');
    if (!target || !window.google || !google.visualization) return;
    const rows = window.businessChartRows || [];
    if (!rows.length) { target.textContent = 'Example chart data is unavailable.'; return; }
    const data = new google.visualization.DataTable();
    data.addColumn('string', 'Month');
    data.addColumn('number', 'Revenue');
    data.addColumn('number', 'Operating costs');
    data.addRows(rows);
    const compact = window.matchMedia('(max-width: 680px)').matches;
    const options = {
      backgroundColor: 'transparent', fontName: 'DM Sans', fontSize: 11,
      colors: ['#b76b75', '#d8c7a7'], legend: { position: 'none' },
      chartArea: { left: compact ? 53 : 62, top: 20, width: compact ? '80%' : '84%', height: '76%' },
      bar: { groupWidth: '58%' },
      vAxis: { minValue: 0, format: 'short', gridlines: { color: '#4b4640', count: 5 }, textStyle: { color: '#d4ccc2', fontSize: 10 }, baselineColor: '#6b6259' },
      hAxis: { textStyle: { color: '#e5ddd3', fontSize: compact ? 9 : 10 }, baselineColor: '#6b6259', gridlines: { color: 'transparent' } },
      tooltip: { textStyle: { fontName: 'DM Sans', fontSize: 12 } },
      animation: { startup: true, duration: 350, easing: 'out' }
    };
    const chart = new google.visualization.ColumnChart(target);
    chart.draw(data, options);
    if (!window.portfolioChartResizeBound) {
      window.portfolioChartResizeBound = true;
      let resizeFrame;
      window.addEventListener('resize', () => {
        window.clearTimeout(resizeFrame);
        resizeFrame = window.setTimeout(drawBusinessChart, 120);
      }, { passive: true });
    }
  }

  window.addEventListener('load', () => {
    if (window.google && google.charts) {
      google.charts.load('current', { packages: ['corechart'] });
      google.charts.setOnLoadCallback(drawBusinessChart);
    } else {
      const target = document.getElementById('business-chart');
      if (target) target.innerHTML = '<p class="chart-loading">The chart needs an internet connection to load. The rest of the portfolio remains available.</p>';
    }
  });
})();
