<?php
$images = [
    'data/dom.png',
    'data/dom2.png',
    'data/dom3.png',
    'data/dom4.png',
    'data/project1.jpg',
    'data/project2.jpg',
    'data/dom6.jpg',
    'data/sky.jpg',
    'data/sky1.jpg',
    'data/skye.jpg',
    'data/zion.jpg',
    'data/zion1.jpg'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        body { font-family: Arial, sans-serif; background: #222; color: #fff; }
        .carousel { display: flex; overflow-x: auto; gap: 16px; padding: 20px; height: 300px; }
        .carousel img { height: 300px; cursor: pointer; border-radius: 8px; transition: transform 0.2s; width:auto; }
        .carousel img:hover { transform: scale(2.05); }
        .modal {
            display: none; position: fixedt; z-index: 999;
            left: 0; top: 0; width: 100vw; height: 100vh;
            background: rgba(0,0,0,0.85); justify-content: center; align-items: center;
        }
        .modal.active { display: flex; }
        .modal-content { position: relative; }
        .modal img { max-width: 90vw; max-height: 80vh; border-radius: 10px; }
        .close, .prev, .next {
            position: absolute; top: 50%; transform: translateY(-50%);
            background: rgba(0,0,0,0.6); color: #fff; border: none; font-size: 2rem;
            padding: 10px; cursor: pointer; border-radius: 50%;
        }
        .close { top: 20px; right: 20px; transform: none; font-size: 2.5rem; }
        .prev { left: -60px; }
        .next { right: -60px; }
        @media (max-width: 600px) {
            .prev, .next { left: 10px; right: 10px; }
        }
    </style>
</head>
<body>
    <header style="position: sticky; top: 0;"> <?php include 'includes/header.php' ?></header>
    <h1>Gallery&#128525;</h1>
    <div class="carousel">
        <?php foreach ($images as $idx => $img): ?>
            <img src="<?= htmlspecialchars($img) ?>" alt="Gallery Image <?= $idx+1 ?>" data-index="<?= $idx ?>">
            <hr>
        <?php endforeach; ?>
        
    </div>
    <div class="modal" id="modal">
        <div class="modal-content">
            <button class="close" id="closeBtn">&times;</button>
            <button class="prev" id="prevBtn">&#8592;</button>
            <img id="modalImg" src="" alt="Full Image">
            <button class="next" id="nextBtn">&#8594;</button>
        </div>
    </div>

    <script>
        const images = <?= json_encode($images) ?>;
        const carouselImgs = document.querySelectorAll('.carousel img');
        const modal = document.getElementById('modal');
        const modalImg = document.getElementById('modalImg');
        const closeBtn = document.getElementById('closeBtn');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentIndex = 0;

        function openModal(index) {
            currentIndex = index;
            modalImg.src = images[currentIndex];
            modal.classList.add('active');
        }

        function closeModal() {
            modal.classList.remove('active');
        }

        function showPrev() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            modalImg.src = images[currentIndex];
        }

        function showNext() {
            currentIndex = (currentIndex + 1) % images.length;
            modalImg.src = images[currentIndex];
        }

        carouselImgs.forEach(img => {
            img.addEventListener('click', () => openModal(parseInt(img.dataset.index)));
        });
        closeBtn.addEventListener('click', closeModal);
        prevBtn.addEventListener('click', showPrev);
        nextBtn.addEventListener('click', showNext);

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (!modal.classList.contains('active')) return;
            if (e.key === 'Escape') closeModal();
            if (e.key === 'ArrowLeft') showPrev();
            if (e.key === 'ArrowRight') showNext();
        });

        // Click outside image to close
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });
    </script>
    <footer> <?php include 'includes/footer.php' ?></footer>
</body>
</html>