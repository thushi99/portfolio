<article class="portfolio" data-page="portfolio">
        
    <header>
        <h2 class="h2 article-title">Projects</h2>
    </header>

    <section class="projects">
        <ul class="filter-list">
            <li class="filter-item">
                <button class="active" data-filter-btn>All</button>
            </li>
            <li class="filter-item">
                <button data-filter-btn>Web Development</button>
            </li>
            <li class="filter-item">
                <button data-filter-btn>Cyber Security</button>
            </li>
            <li class="filter-item">
                <button data-filter-btn>Compliance</button>
            </li>
        </ul>

        <div class="filter-select-box">
            <button class="filter-select" data-select>
                <div class="select-value" data-selecct-value>Select Category</div>
                <div class="select-icon">
                    <ion-icon name="chevron-down"></ion-icon>
                </div>
            </button>

            <ul class="select-list">
                <li class="select-item">
                    <button data-select-item>All</button>
                </li>
                <li class="select-item">
                    <button data-select-item>Web Development</button>
                </li>
                <li class="select-item">
                    <button data-select-item>Cyber Security</button>
                </li>
                <li class="select-item">
                    <button data-select-item>Compliance</button>
                </li>
            </ul>
        </div>

        <ul class="project-list">
            <li class="project-item  active" data-filter-item data-category="web development">
                <a href="#">
                    <figure class="project-img">
                        <div class="project-item-icon-box">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>
                        <img src="./assets/images/project-1.jpg" alt="finance" loading="lazy">
                    </figure>
                    <h3 class="project-title">Finance</h3>
                    <p class="project-category">Web development</p>
                </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="cyber security">
                <a href="#">
                    <figure class="project-img">
                        <div class="project-item-icon-box">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>
                        <img src="./assets/images/project-5.png" alt="dsm." loading="lazy">
                    </figure>
                    <h3 class="project-title">DSM.</h3>
                    <p class="project-category">Cyber Security</p>
                </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="compliance">
                <a href="#">
                    <figure class="project-img">
                        <div class="project-item-icon-box">
                        <ion-icon name="eye-outline"></ion-icon>
                        </div>

                        <img src="./assets/images/project-8.jpg" alt="task manager" loading="lazy">
                    </figure>
                    <h3 class="project-title">Task Manager</h3>
                    <p class="project-category">Compliance</p>
                </a>
            </li>
        </ul>
    </section>
</article>