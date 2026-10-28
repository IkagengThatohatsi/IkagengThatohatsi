(() => {
  const menuToggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('.site-nav');
  if (menuToggle && nav) {
    menuToggle.addEventListener('click', () => {
      const isOpen = nav.classList.toggle('open');
      menuToggle.setAttribute('aria-expanded', String(isOpen));
      menuToggle.setAttribute('aria-label', isOpen ? 'Close navigation' : 'Open navigation');
    });
    nav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
      nav.classList.remove('open');
      menuToggle.setAttribute('aria-expanded', 'false');
      menuToggle.setAttribute('aria-label', 'Open navigation');
    }));
  }

  const filters = document.querySelectorAll('[data-filter]');
  const projectCards = document.querySelectorAll('.project-card[data-category]');
  filters.forEach(button => button.addEventListener('click', () => {
    const filter = button.dataset.filter;
    filters.forEach(item => {
      const active = item === button;
      item.classList.toggle('active', active);
      item.setAttribute('aria-pressed', String(active));
    });
    projectCards.forEach(card => {
      card.hidden = filter !== 'all' && card.dataset.category !== filter;
    });
  }));

  const revealItems = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    revealItems.forEach(item => observer.observe(item));
  } else {
    revealItems.forEach(item => item.classList.add('is-visible'));
  }

  function drawToolkitChart() {
    const target = document.getElementById('toolkit-chart');
    if (!target || !window.google || !google.charts) return;
    const rows = window.portfolioChartRows || [];
    if (!rows.length) {
      target.textContent = 'Chart data is not available yet.';
      return;
    }
    const data = new google.visualization.DataTable();
    data.addColumn('string', 'Category');
    data.addColumn('number', 'Number of listed tools');
    data.addRows(rows);
    const options = {
      backgroundColor: 'transparent',
      fontName: 'DM Sans',
      fontSize: 11,
      legend: { position: 'none' },
      chartArea: { left: 48, top: 18, width: '83%', height: '73%' },
      colors: ['#ff725e'],
      bar: { groupWidth: '56%' },
      vAxis: { minValue: 0, gridlines: { color: '#e9e5ef', count: 5 }, textStyle: { color: '#5b5670' }, baselineColor: '#c8c2d7' },
      hAxis: { textStyle: { color: '#242039', fontSize: 10 }, slantedText: true, slantedTextAngle: 20, baselineColor: '#c8c2d7' },
      tooltip: { textStyle: { fontName: 'DM Sans', fontSize: 12 } },
      animation: { startup: true, duration: 450, easing: 'out' }
    };
    const chart = new google.visualization.ColumnChart(target);
    chart.draw(data, options);
    window.addEventListener('resize', () => chart.draw(data, options), { passive: true });
  }

  window.addEventListener('load', () => {
    if (window.google && google.charts) {
      google.charts.load('current', { packages: ['corechart'] });
      google.charts.setOnLoadCallback(drawToolkitChart);
    }
  });
})();
