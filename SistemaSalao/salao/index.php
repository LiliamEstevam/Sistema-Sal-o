<!DOCTYPE html>
<html>
<head>
  <title>Página Inicial do Salão</title>
  <link rel="stylesheet" type="text/css" href="style/styles.css">
</head>
<body>
  <h1>Bem-vindo ao nosso sistema de salão!</h1>
  
  <ul class="menu">
    <li><a href="cliente1.php"><button>Cliente </button></a></li>
    <li><a href="servico1.php"><button>Serviço </button></a></li>
    <li><a href="funcionario1.php"><button>Funcionário</button></a></li>
    <li><a href="agenda1.php"><button>Agenda</button></a></li>
  </ul>

  <div class="carousel-container">
    <div class="carousel">
      <img class="carousel-image" src="style/1.png" alt="Imagem 1">
      <img class="carousel-image" src="style/2.png" alt="Imagem 2">
      <img class="carousel-image" src="style/3.png" alt="Imagem 3">
      <button class="carousel-button previous">Anterior</button>
      <button class="carousel-button next">Próximo</button>
    </div>
  </div>
  
<script>
  let currentImageIndex = 0;
  const images = Array.from(document.querySelectorAll('.carousel-image'));
  const previousButton = document.querySelector('.carousel-button.previous');
  const nextButton = document.querySelector('.carousel-button.next');

  function showImage(index) {
    images.forEach((image, i) => {
      image.style.display = i === index ? 'block' : 'none';
    });
  }

  previousButton.addEventListener('click', () => {
    currentImageIndex = (currentImageIndex + images.length - 1) % images.length;
    showImage(currentImageIndex);
  });

  nextButton.addEventListener('click', () => {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    showImage(currentImageIndex);
  });
</script>
</body>
</html>

