<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts::guest')] class extends Component {
    public string $title = 'Welcome';
};
?>

<div>
    <section id="home" class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">International Conference</div>
                <h1 class="hero-title">GLOBE 2026</h1>
                <h2 class="hero-subtitle">
                    Global Language, Opportunities for Excellence
                </h2>
                <p class="hero-description">
                    Universitas Harapan Bangsa, Purwokerto, Indonesia
                </p>
                <div class="mt-4 row g-4 justify-content-center">
                    <div class="col-sm-6 col-md-6 col-12">
                        <div class="card">
                            <a href="" class="text-decoration-none">
                                <div class="card-body">
                                    <h5 class="card-title">English Language Education for Sustainable Futures:
                                        Technology, Culture, and Global Competence</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-12">
                        <div class="card">
                            <a href="" class="text-decoration-none">
                                <div class="card-body">
                                    <h5 class="card-title">Social Humanities: Economics, Management, and Law in Global
                                        Contexts</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
