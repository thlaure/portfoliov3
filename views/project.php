<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <?php include(__DIR__ . '/head.inc.php'); ?>
    <link rel="stylesheet" href="../assets/css/project.css">
</head>

<body>
    <div>
        <div class="parallax-header-project">
            <div class="container-fluid">
                <a href="/" class="btn btn-light rounded-pill p-md-3 font-weight-bold col-md-2 mt-3 mx-md-3" title="Return to home"><i class="fas fa-arrow-left"></i> Retour</a>
            </div>
            <h1 class="text-monospace text-center text-light mt-4"><?= $project->title ?></h1>
            <hr class="sm-separator w-25 mx-auto">
            <h2 class="text-center text-light font-italic font-weight-light"><?= $project->tag ?></h2>
        </div>
        <div class="mt-5 pb-5 container">
            <?php if (isset($project->context)) : ?>
                <p class="lead font-weight-bolder"><i class="fas fa-map-marker-alt"></i> <?= $project->context ?></p>
            <?php endif ?>

            <p class="lead font-italic"><i class="far fa-calendar-alt"></i> <?= date('m/Y', strtotime($project->start_date)) ?> - <?= date('m/Y', strtotime($project->end_date)) ?></p>
            <p class="lead text-justify"><?= nl2br($project->description) ?></p>

            <?php if (isset($project->files)) : ?>
                <?php foreach ($project->files->files as $file) : ?>
                    <div><a href="../assets/docs/<?= $file->path ?>" class="lead unstyled"><i class="far fa-file-alt"></i> <?= $file->title ?></a></div>
                <?php endforeach ?>
            <?php endif ?>

            <?php if (isset($project->file->links)) : ?>
                <?php foreach ($project->files->links as $link) : ?>
                    <div><a href="<?= $link->path ?>" class="lead unstyled"><i class="fas fa-external-link-alt"></i> <?= $link->title ?></a></div>
                <?php endforeach ?>
            <?php endif ?>

            <?php if (count($project->files->images) > 0) : ?>
                <div id="carouselIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php for ($i = 0; $i < count($project->files->images); $i++) : ?>
                            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="<?= $i ?>" <?php if ($i === 0) : ?>class="active" <?php endif ?> aria-current="true" aria-label="Slide <?= $i ?>"></button>
                        <?php endfor ?>
                    </div>
                    <div class="carousel-inner">
                        <?php foreach ($project->files->images as $key => $image) : ?>
                            <div class="carousel-item <?php if ($key === 1) : ?>active<?php endif ?>">
                                <img src="../assets/images/<?= $image ?>" class="d-block w-100" alt="Image #<?= $key ?>">
                            </div>
                        <?php endforeach ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            <?php endif ?>
        </div>
    </div>
    <?php include(__DIR__ . '/footer.inc.php'); ?>
</body>

</html>