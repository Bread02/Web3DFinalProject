  function swap(selected) {
    // <!-- First don't display all div id contents -->
    document.getElementById('home').style.display = 'none';
    document.getElementById('milkshake').style.display = 'none';
    document.getElementById('StatementOfOriginality').style.display = 'none';
    document.getElementById('Acknowledgements').style.display = 'none';
    document.getElementById('References').style.display = 'none';

    // then display the selected div id elements
    document.getElementById(selected).style.display = 'block';
  }