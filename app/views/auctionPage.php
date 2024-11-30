<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky.vision Domain Auction</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/css/css2.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>
<div class="hero-section">
    <video id="background-video" autoplay loop muted playsinline></video>
    <div class="overlay"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">

            <?php if($_REQUEST['step'] === 'bid_taken') { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Your bid has been submitted successfully!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php } ?>

            <div class="col-lg-8 mx-auto text-center text-white">
                <h1 class="display-3 mb-4 animate-up"><b><u>sky.vision</u></b> for sale!</h1>
                <p class="lead mb-4 animate-up-delay">Premium Domain for Visionaries for Sale via Private Auction</p>
                <a href="#bid-section" class="btn btn-lg btn-outline-light animate-up-delay-2">
                    <i class="bi bi-arrow-down"></i> Place Your Pre-auction Bid
                </a>
            </div>

        </div>
    </div>
</div>

<div class="container py-5">

    <section class="about-section mb-5 pt-3">
        <div class="row g-4">
            <div class="col-md-12 text-center mb-5">
                <h2 class="display-5 fw-bold">About the Domain</h2>
                <p class="lead text-muted">Perfect for Innovative Technology Companies</p>
            </div>
<!--            <div class="col-sm-6">-->
<!--                <div class="card h-100 border-0 shadow-sm">-->
<!--                    <div class="card-body">-->
<!--                        <div class="feature-icon mb-3">-->
<!--                            <i class="bi bi-rocket-takeoff"></i>-->
<!--                        </div>-->
<!--                        <h3 class="h4 mb-3">Perfect for:</h3>-->
<!--                        <ul class="list-unstyled">-->
<!--                            <li class="mb-3"><i class="bi bi-check2-circle text-primary me-2"></i>Innovative technology companies</li>-->
<!--                            <li class="mb-3"><i class="bi bi-check2-circle text-primary me-2"></i>Virtual reality platforms</li>-->
<!--                            <li class="mb-3"><i class="bi bi-check2-circle text-primary me-2"></i>Future-focused brands</li>-->
<!--                            <li class="mb-3"><i class="bi bi-check2-circle text-primary me-2"></i>Aviation and aerospace ventures</li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="col-sm-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="feature-icon mb-3">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <h3 class="h4 mb-3">Auction Details</h3>
                        <div class="auction-info">
                            <p class="mb-3"><i class="bi bi-calendar-check text-primary me-2"></i>Opens: January 15th, 2025</p>
                            <p class="mb-3"><i class="bi bi-clock text-primary me-2"></i>Duration: 10 days</p>
                            <p class="mb-3"><i class="bi bi-check2-circle text-primary me-2"></i>Winner will be chosen January 25th, 2025</p>
                            <p class="mb-3"><i class="bi bi-shield-check text-primary me-2"></i>Secure escrow service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <a href="#bid-section" class="btn btn-lg btn-outline-dark text-center align-items-center">
                    <i class="bi bi-arrow-down"></i> Place Your Pre-auction Bid
                </a>
            </div>
        </div>
    </section>

    <section class="domain-information mb-5 pt-5" id="team">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Domain information:</h2>
                <p class="lead text-muted pt-3">Full tech <a href="https://www.whois.com/whois/sky.vision" target="_blank">domain information here</a>.</p>
            </div>
            <div class="p-5 pt-0">
                <div class="card border-0 mb-4 shadow-sm team-card ">
                    <a href="https://www.whois.com/whois/sky.vision" target="_blank">
                        <img src="/assets/images/tech_info.jpg" alt="Tech Info">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section mb-5 pt-5" id="team">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Meet the Owners</h2>
                <p class="lead text-muted">The visionaries behind <b>sky.vision</b></p>
            </div>

            <div class="col-sm-6 mb-4">
                <div class="card border-0 shadow-sm team-card">
                    <div class="card-body text-center">
                        <img src="/assets/images/klim.jpg" alt="Rudakov Klim" class="rounded-circle mb-3 team-img">
                        <h3 class="h4">Rudakov Klim</h3>
                        <p class="text-muted">Co-owner</p>
                        <div class="social-links">
                            <a href="mailto:info@sky.vision" target="_blank" class="btn btn-outline-primary btn-sm mx-1">
                                <i class="bi bi-postcard"></i> Send e-mail
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 mb-4">
                <div class="card border-0 shadow-sm team-card">
                    <div class="card-body text-center">
                        <img src="/assets/images/alex.jpg" alt="Ermakov Alexey" class="rounded-circle mb-3 team-img">
                        <h3 class="h4">Ermakov Alexey</h3>
                        <p class="text-muted">Co-owner & technical support</p>
                        <div class="social-links">
                            <a href="mailto:info@sky.vision" target="_blank" class="btn btn-outline-primary btn-sm mx-1">
                                <i class="bi bi-postcard"></i> Send e-mail
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="bid-section mb-5 pt-5" id="bid-section">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h2 class="text-center mb-4">Submit Your Bid</h2>
                        <form method="POST" action="/index.php" id="bidForm" onsubmit="saveFormData()">
                            <input type="hidden" name="action" value="submitBid">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="company" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="company" name="company">
                            </div>

                            <div class="mb-3">
                                <label for="position" class="form-label">Your Position in Company</label>
                                <input type="text" class="form-control" id="position" name="position">
                            </div>

                            <div class="mb-3">
                                <label for="amount" class="form-label">Bid Amount (USD) *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-currency-dollar"></i></span>
                                    <input type="number" class="form-control" id="amount" name="amount" min="2000" step="100" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-4">
                                <label for="message" class="form-label">Additional contact info (whatsApp, social link, telegram, viber) *</label>
                                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                            </div>

<!--                            <div class="mb-4">-->
<!--                                <label for="captcha" class="form-label">Captcha:</label><br>-->
<!--                                <img src="/captcha.php" alt="CAPTCHA" style="margin-bottom: 10px;"><br>-->
<!--                                <input type="text" id="captcha" name="captcha" class="form-label" required><br><br>-->
<!--                            </div>-->

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                    <i class="bi bi-send me-2"></i>Submit Bid
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="terms-section mb-5 pt-5">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <h2 class="card-title text-center mb-4">Auction Rules & Terms</h2>
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <ol class="terms-list">
                            <li>The highest bidder will be contacted within 24 hours of auction close.</li>
                            <li>Payment must be made within 48 hours of auction end.</li>
                            <li>Transfer of domain will be handled through a secure escrow service.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="bids">
        <div class="container-fluid my-5"> <!-- Используем container-fluid для полной ширины -->
            <h2 class="text-center mb-4">Pre Auction Bids Table</h2>
            <div class="table-wrapper">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Company</th>
                            <th>Bid <i class="bi bi-arrow-up"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($bids as $bid): ?>
                            <tr>
                                <td><?= substr($bid['name'], 0, 2) . '***' . substr($bid['name'], -2) ?></td>
                                <td><?= substr($bid['email'], 0, 2) . '***' . substr($bid['email'], -3) ?></td>
                                <td><?= substr($bid['company'], 0, 2) . '***' . substr($bid['company'], -2) ?></td>
                                <td>* * *</td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <footer class="text-center mt-5 py-4">
        <p class="text-muted">If you have any question, we would be happy to answer them. Please email us at
            <a href="mailto:info@sky.vision" target="_blank" class="btn btn-outline-primary btn-sm mx-1">
                <i class="bi bi-postcard"></i> info@sky.vision
            </a></p>
    </footer>
</div>

<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>
