<?php ob_start(); ?>
<!-- Slideshow -->
<div class="slideshow">
    <div class="slides">
        <?php foreach ($latestCourses as $course): ?>
            <div class="slide">
                <img src="<?= $course['image'] ?>" alt="<?= $course['title'] ?>">
                <div class="overlay">
                    <h3><?= $course['title'] ?></h3>
                    <p><?= $course['description'] ?></p>
                    <button>Ver Curso</button>
                </div>
            </div>
        <?php endforeach; ?>

<div class="slideshow">
    <div class="slides">
        <div class="slide active">
            <img src="public/images/slide1.jpg" alt="Slide 1">
            <div class="overlay">Lorem ipsum dolor sit amet.</div>
        </div>
        <div class="slide">
            <img src="public/images/slide2.jpg" alt="Slide 2">
            <div class="overlay">Pellentesque malesuada nunc.</div>
        </div>

    </div>
    <button class="prev">&lt;</button>
    <button class="next">&gt;</button>
</div>

<!-- Lista de Cursos -->
<h2>Meus Cursos</h2>
<div class="courses">
    <?php foreach ($courses as $course): ?>
        <div class="course-card">
            <img src="<?= $course['image'] ?>" alt="<?= $course['title'] ?>">
            <h3><?= $course['title'] ?></h3>
            <p>
                <?= implode(' ', array_slice(explode(' ', $course['description']), 0, 10)) . (str_word_count($course['description']) > 10 ? '...' : '') ?>
            </p>

            <p><?= $course['description'] ?></p>
            <button>Ver Curso</button>
        </div>
    <?php endforeach; ?>
    <div class="add-course">
        <span>Adicionar Curso</span>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>
