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
                <a href="/" class="btn btn-light rounded-pill p-md-3 font-weight-bold col-md-2 mt-3 mx-md-3" title="Return to home">Retour à l'accueil</a>
            </div>
            <h1 class="text-monospace text-center text-light mt-4"><?= $project->title ?></h1>
            <hr class="sm-separator w-25 mx-auto">
            <h2 class="text-center text-light font-italic font-weight-light"><?= $project->tag ?></h2>
        </div>
        <div class="mt-5 pb-5 container">
            <?php if (isset($project->context)) : ?>
                <p class="lead font-weight-bolder">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                        <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                    </svg>
                    <?= $project->context ?>
                </p>
            <?php endif ?>

            <p class="lead font-italic">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                </svg>
                <?= date('m/Y', strtotime($project->start_date)) ?> - <?= date('m/Y', strtotime($project->end_date)) ?>
            </p>
            <p class="lead text-justify"><?= nl2br($project->description) ?></p>

            <?php if (isset($project->files)) : ?>
                <?php $files = $project->files->files ?>
                <?php foreach ($files as $file) : ?>
                    <div>
                        <a href="../assets/docs/<?= $file->path ?>" class="lead unstyled">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                            </svg>
                            <?= $file->title ?>
                        </a>
                    </div>
                <?php endforeach ?>
            <?php endif ?>

            <?php if (isset($project->file->links)) : ?>
                <?php $links = $project->files->links ?>
                <?php foreach ($links as $link) : ?>
                    <div>
                        <a href="<?= $link->path ?>" class="lead unstyled">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                                <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                                <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
                            </svg>
                            <?= $link->title ?>
                        </a>
                    </div>
                <?php endforeach ?>
            <?php endif ?>

            <?php if (count($project->files->images) > 0) : ?>
                <div id="carouselIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php $nbImages = count($project->files->images) ?>
                        <?php for ($i = 0; $i < $nbImages; ++$i) : ?>
                            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="<?= $i ?>" <?php if ($i === 0) : ?>class="active" <?php endif ?> aria-current="true" aria-label="Slide <?= $i ?>"></button>
                        <?php endfor ?>
                    </div>
                    <div class="carousel-inner">
                        <?php $images = $project->files->images ?>
                        <?php foreach ($images as $key => $image) : ?>
                            <div class="carousel-item <?php if ($key === 1) : ?>active<?php endif ?>">
                                <img src="../assets/images/<?= $image ?>" class="d-block w-100" alt="Image #<?= $key ?>" loading="lazy">
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