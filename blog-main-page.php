<?php include 'header.php'; ?>


<?php include 'inner-banner.php'; ?>

<hr>
<section class="blog-tabs-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs blog-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                            aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                            aria-selected="false">Mobile Development</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tech-tab" data-bs-toggle="tab" data-bs-target="#tech-tab-pane"
                            type="button" role="tab" aria-controls="tech-tab-pane"
                            aria-selected="false">Technology</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="mar-tab" data-bs-toggle="tab" data-bs-target="#mar-tab-pane"
                            type="button" role="tab" aria-controls="mar-tab-pane"
                            aria-selected="false">Marketing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="game-tab" data-bs-toggle="tab" data-bs-target="#game-tab-pane"
                            type="button" role="tab" aria-controls="game-tab-pane" aria-selected="false">Game</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="block-tab" data-bs-toggle="tab" data-bs-target="#block-tab-pane"
                            type="button" role="tab" aria-controls="block-tab-pane"
                            aria-selected="false">Blockchain</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="digi-tab" data-bs-toggle="tab" data-bs-target="#digi-tab-pane"
                            type="button" role="tab" aria-controls="digi-tab-pane" aria-selected="false">Digital
                            Solution</button>
                    </li>

                </ul>
                <div class="tab-content blog-tabs-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <div class="card-grid row gy-4">
                            <div class="col-lg-4 col-12">
                                <div class="blog-card">
                                    <div class="icon edge edge-base">
                                        <img src="assets/images/sample.png" alt="">
                                    </div>
                                    <div class="title">
                                        <h2>Dummy Title of Blog</h2>
                                        <span class="date">02 October, 2025</span>
                                    </div>
                                    <p>This is dummy copy. It is not meant to be read. This is dummy copy. It is not
                                        meant
                                        to be read. This is dummy copy. It is not meant to be read.</p>
                                    <div class="author">
                                        <img src="assets/images/author.jpg" alt="">
                                        <div class="info">
                                            <span class="name">John Doe</span>
                                            <span class="verified">
                                                <svg width="7" height="6" viewBox="0 0 7 6" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.37986 5.4474L0.151978 3.23285C0.0897218 3.1706 0.0585938 3.09056 0.0585938 2.99272C0.0585938 2.89489 0.0897218 2.81485 0.151978 2.75259L0.645581 2.27233C0.707837 2.20118 0.785657 2.16561 0.879041 2.16561C0.972426 2.16561 1.05469 2.20118 1.12584 2.27233L2.61999 3.76648L5.82174 0.564733C5.89289 0.493583 5.97515 0.458008 6.06854 0.458008C6.16192 0.458008 6.23974 0.493583 6.302 0.564733L6.7956 1.04499C6.85786 1.10725 6.88899 1.18729 6.88899 1.28513C6.88899 1.38296 6.85786 1.463 6.7956 1.52526L2.86012 5.4474C2.79787 5.51855 2.71782 5.55412 2.61999 5.55412C2.52216 5.55412 2.44212 5.51855 2.37986 5.4474Z"
                                                        fill="#A866EC" />
                                                </svg>
                                                Verified writer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="blog-card">
                                    <div class="icon edge edge-base">
                                        <img src="assets/images/sample.png" alt="">
                                    </div>
                                    <div class="title">
                                        <h2>Dummy Title of Blog</h2>
                                        <span class="date">02 October, 2025</span>
                                    </div>
                                    <p>This is dummy copy. It is not meant to be read. This is dummy copy. It is not
                                        meant
                                        to be read. This is dummy copy. It is not meant to be read.</p>
                                    <div class="author">
                                        <img src="assets/images/author.jpg" alt="">
                                        <div class="info">
                                            <span class="name">John Doe</span>
                                            <span class="verified">
                                                <svg width="7" height="6" viewBox="0 0 7 6" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.37986 5.4474L0.151978 3.23285C0.0897218 3.1706 0.0585938 3.09056 0.0585938 2.99272C0.0585938 2.89489 0.0897218 2.81485 0.151978 2.75259L0.645581 2.27233C0.707837 2.20118 0.785657 2.16561 0.879041 2.16561C0.972426 2.16561 1.05469 2.20118 1.12584 2.27233L2.61999 3.76648L5.82174 0.564733C5.89289 0.493583 5.97515 0.458008 6.06854 0.458008C6.16192 0.458008 6.23974 0.493583 6.302 0.564733L6.7956 1.04499C6.85786 1.10725 6.88899 1.18729 6.88899 1.28513C6.88899 1.38296 6.85786 1.463 6.7956 1.52526L2.86012 5.4474C2.79787 5.51855 2.71782 5.55412 2.61999 5.55412C2.52216 5.55412 2.44212 5.51855 2.37986 5.4474Z"
                                                        fill="#A866EC" />
                                                </svg>
                                                Verified writer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="blog-card">
                                    <div class="icon edge edge-base">
                                        <img src="assets/images/sample.png" alt="">
                                    </div>
                                    <div class="title">
                                        <h2>Dummy Title of Blog</h2>
                                        <span class="date">02 October, 2025</span>
                                    </div>
                                    <p>This is dummy copy. It is not meant to be read. This is dummy copy. It is not
                                        meant
                                        to be read. This is dummy copy. It is not meant to be read.</p>
                                    <div class="author">
                                        <img src="assets/images/author.jpg" alt="">
                                        <div class="info">
                                            <span class="name">John Doe</span>
                                            <span class="verified">
                                                <svg width="7" height="6" viewBox="0 0 7 6" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.37986 5.4474L0.151978 3.23285C0.0897218 3.1706 0.0585938 3.09056 0.0585938 2.99272C0.0585938 2.89489 0.0897218 2.81485 0.151978 2.75259L0.645581 2.27233C0.707837 2.20118 0.785657 2.16561 0.879041 2.16561C0.972426 2.16561 1.05469 2.20118 1.12584 2.27233L2.61999 3.76648L5.82174 0.564733C5.89289 0.493583 5.97515 0.458008 6.06854 0.458008C6.16192 0.458008 6.23974 0.493583 6.302 0.564733L6.7956 1.04499C6.85786 1.10725 6.88899 1.18729 6.88899 1.28513C6.88899 1.38296 6.85786 1.463 6.7956 1.52526L2.86012 5.4474C2.79787 5.51855 2.71782 5.55412 2.61999 5.55412C2.52216 5.55412 2.44212 5.51855 2.37986 5.4474Z"
                                                        fill="#A866EC" />
                                                </svg>
                                                Verified writer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="blog-card">
                                    <div class="icon edge edge-base">
                                        <img src="assets/images/sample.png" alt="">
                                    </div>
                                    <div class="title">
                                        <h2>Dummy Title of Blog</h2>
                                        <span class="date">02 October, 2025</span>
                                    </div>
                                    <p>This is dummy copy. It is not meant to be read. This is dummy copy. It is not
                                        meant
                                        to be read. This is dummy copy. It is not meant to be read.</p>
                                    <div class="author">
                                        <img src="assets/images/author.jpg" alt="">
                                        <div class="info">
                                            <span class="name">John Doe</span>
                                            <span class="verified">
                                                <svg width="7" height="6" viewBox="0 0 7 6" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.37986 5.4474L0.151978 3.23285C0.0897218 3.1706 0.0585938 3.09056 0.0585938 2.99272C0.0585938 2.89489 0.0897218 2.81485 0.151978 2.75259L0.645581 2.27233C0.707837 2.20118 0.785657 2.16561 0.879041 2.16561C0.972426 2.16561 1.05469 2.20118 1.12584 2.27233L2.61999 3.76648L5.82174 0.564733C5.89289 0.493583 5.97515 0.458008 6.06854 0.458008C6.16192 0.458008 6.23974 0.493583 6.302 0.564733L6.7956 1.04499C6.85786 1.10725 6.88899 1.18729 6.88899 1.28513C6.88899 1.38296 6.85786 1.463 6.7956 1.52526L2.86012 5.4474C2.79787 5.51855 2.71782 5.55412 2.61999 5.55412C2.52216 5.55412 2.44212 5.51855 2.37986 5.4474Z"
                                                        fill="#A866EC" />
                                                </svg>
                                                Verified writer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="blog-card">
                                    <div class="icon edge edge-base">
                                        <img src="assets/images/sample.png" alt="">
                                    </div>
                                    <div class="title">
                                        <h2>Dummy Title of Blog</h2>
                                        <span class="date">02 October, 2025</span>
                                    </div>
                                    <p>This is dummy copy. It is not meant to be read. This is dummy copy. It is not
                                        meant
                                        to be read. This is dummy copy. It is not meant to be read.</p>
                                    <div class="author">
                                        <img src="assets/images/author.jpg" alt="">
                                        <div class="info">
                                            <span class="name">John Doe</span>
                                            <span class="verified">
                                                <svg width="7" height="6" viewBox="0 0 7 6" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.37986 5.4474L0.151978 3.23285C0.0897218 3.1706 0.0585938 3.09056 0.0585938 2.99272C0.0585938 2.89489 0.0897218 2.81485 0.151978 2.75259L0.645581 2.27233C0.707837 2.20118 0.785657 2.16561 0.879041 2.16561C0.972426 2.16561 1.05469 2.20118 1.12584 2.27233L2.61999 3.76648L5.82174 0.564733C5.89289 0.493583 5.97515 0.458008 6.06854 0.458008C6.16192 0.458008 6.23974 0.493583 6.302 0.564733L6.7956 1.04499C6.85786 1.10725 6.88899 1.18729 6.88899 1.28513C6.88899 1.38296 6.85786 1.463 6.7956 1.52526L2.86012 5.4474C2.79787 5.51855 2.71782 5.55412 2.61999 5.55412C2.52216 5.55412 2.44212 5.51855 2.37986 5.4474Z"
                                                        fill="#A866EC" />
                                                </svg>
                                                Verified writer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="blog-card">
                                    <div class="icon edge edge-base">
                                        <img src="assets/images/sample.png" alt="">
                                    </div>
                                    <div class="title">
                                        <h2>Dummy Title of Blog</h2>
                                        <span class="date">02 October, 2025</span>
                                    </div>
                                    <p>This is dummy copy. It is not meant to be read. This is dummy copy. It is not
                                        meant
                                        to be read. This is dummy copy. It is not meant to be read.</p>
                                    <div class="author">
                                        <img src="assets/images/author.jpg" alt="">
                                        <div class="info">
                                            <span class="name">John Doe</span>
                                            <span class="verified">
                                                <svg width="7" height="6" viewBox="0 0 7 6" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.37986 5.4474L0.151978 3.23285C0.0897218 3.1706 0.0585938 3.09056 0.0585938 2.99272C0.0585938 2.89489 0.0897218 2.81485 0.151978 2.75259L0.645581 2.27233C0.707837 2.20118 0.785657 2.16561 0.879041 2.16561C0.972426 2.16561 1.05469 2.20118 1.12584 2.27233L2.61999 3.76648L5.82174 0.564733C5.89289 0.493583 5.97515 0.458008 6.06854 0.458008C6.16192 0.458008 6.23974 0.493583 6.302 0.564733L6.7956 1.04499C6.85786 1.10725 6.88899 1.18729 6.88899 1.28513C6.88899 1.38296 6.85786 1.463 6.7956 1.52526L2.86012 5.4474C2.79787 5.51855 2.71782 5.55412 2.61999 5.55412C2.52216 5.55412 2.44212 5.51855 2.37986 5.4474Z"
                                                        fill="#A866EC" />
                                                </svg>
                                                Verified writer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrap text-center mt-5">
                            <a href="#" class="btn btn-primary">Load More</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">

                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                        tabindex="0">

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<hr>
<?php include 'footer.php'; ?>