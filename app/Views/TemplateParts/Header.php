<!-- BEGIN NAVBAR  -->
<header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
        <!-- BEGIN NAVBAR TOGGLER -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- END NAVBAR TOGGLER -->

        <!-- BEGIN NAVBAR LOGO -->
        <div class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="/" aria-label="Tabler">
                <img class="navbar-brand-image" src="/assets/svg/logo.svg"/>
            </a>
        </div>
        <!-- END NAVBAR LOGO -->

        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item d-none d-md-flex me-3">
                <div class="btn-list">
                    <a href="https://github.com/tabler/tabler" class="btn btn-5" target="_blank" rel="noreferrer">
                        <i class="icon ti ti-brand-github"></i>
                        Source code
                    </a>
                    <a href="https://github.com/sponsors/codecalm" class="btn btn-6" target="_blank" rel="noreferrer">
                        <i class="icon ti ti-heart text-pink"></i>
                        Sponsor
                    </a>
                </div>
            </div>

            <div class="d-none d-md-flex">
                <div class="nav-item">
                    <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                        <i class="icon ti ti-moon"></i>
                    </a>
                    <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                        <i class="icon ti ti-sun"></i>
                    </a>
                </div>

                <div class="nav-item dropdown d-none d-md-flex">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications" data-bs-auto-close="outside" aria-expanded="false">
                        <i class="icon ti ti-bell"></i>
                        <span class="badge bg-red"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                        <div class="card">
                            <div class="card-header d-flex">
                                <h3 class="card-title">Notifications</h3>
                                <div class="btn-close ms-auto" data-bs-dismiss="dropdown"></div>
                            </div>

                            <div class="list-group list-group-flush list-group-hoverable">
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#" class="text-body d-block">Example 1</a>
                                            <div class="d-block text-secondary text-truncate mt-n1">Change deprecated html tags to text decoration classes (#29604)</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="list-group-item-actions">
                                                <i class="icon ti ti-star text-muted"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span class="status-dot d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#" class="text-body d-block">Example 2</a>
                                            <div class="d-block text-secondary text-truncate mt-n1">justify-content:between ⇒ justify-content:space-between (#29734)</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="list-group-item-actions show">
                                                <i class="icon ti ti-star text-yellow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span class="status-dot d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#" class="text-body d-block">Example 3</a>
                                            <div class="d-block text-secondary text-truncate mt-n1">Update change-version.js (#29736)</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="list-group-item-actions">
                                                <i class="icon ti ti-star text-muted"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#" class="text-body d-block">Example 4</a>
                                            <div class="d-block text-secondary text-truncate mt-n1">Regenerate package-lock.json (#29730)</div>
                                        </div>
                                        <div class="col-auto">
                                        <a href="#" class="list-group-item-actions">
                                            <i class="icon ti ti-star text-muted"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <a href="#" class="btn btn-2 w-100"> Archive all </a>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="btn btn-2 w-100"> Mark all as read </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show app menu" data-bs-auto-close="outside" aria-expanded="false">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/apps -->
                        <i class="icon ti ti-apps"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">My Apps</div>
                                <div class="card-actions btn-actions">
                                    <a href="#" class="btn-action">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                                        <i class="icon ti ti-settings"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="card-body scroll-y p-2" style="max-height: 50vh">
                                <div class="row g-0">
                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/amazon.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Amazon</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/android.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Android</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/app-store.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Apple App Store</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/apple-podcast.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Apple Podcast</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/apple.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Apple</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/behance.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Behance</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/discord.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Discord</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/dribbble.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Dribbble</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/dropbox.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Dropbox</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/ever-green.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Ever Green</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/facebook.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Facebook</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/figma.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Figma</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/github.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">GitHub</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/gitlab.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">GitLab</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/google-ads.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Google Ads</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/google-adsense.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Google AdSense</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/google-analytics.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Google Analytics</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/google-cloud.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Google Cloud</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/google-drive.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Google Drive</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/google-fit.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Google Fit</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/google-home.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Google Home</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/google-maps.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Google Maps</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/google-meet.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Google Meet</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/google-photos.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Google Photos</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/google-play.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Google Play</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/google-shopping.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Google Shopping</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/google-teams.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Google Teams</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/google.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Google</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/instagram.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Instagram</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/klarna.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Klarna</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/linkedin.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">LinkedIn</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/mailchimp.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Mailchimp</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/medium.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Medium</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/messenger.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Messenger</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/meta.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Meta</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/monday.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Monday</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/netflix.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Netflix</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/notion.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Notion</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/office-365.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Office 365</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/opera.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Opera</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/paypal.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">PayPal</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/petreon.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Patreon</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/pinterest.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Pinterest</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/play-store.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Play Store</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/quora.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Quora</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/reddit.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Reddit</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/shopify.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Shopify</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/skype.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Skype</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/slack.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Slack</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/snapchat.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Snapchat</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/soundcloud.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">SoundCloud</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/spotify.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Spotify</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/stripe.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Stripe</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/telegram.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Telegram</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/tiktok.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">TikTok</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/tinder.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Tinder</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/trello.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Trello</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/truth.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Truth</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/tumblr.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Tumblr</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/twitch.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Twitch</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/twitter.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Twitter</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/vimeo.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Vimeo</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/vk.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">VK</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/watppad.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Wattpad</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/webflow.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Webflow</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/whatsapp.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">WhatsApp</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/wordpress.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">WordPress</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/xing.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Xing</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/yelp.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Yelp</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/youtube.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">YouTube</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/zapier.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Zapier</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/zendesk.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Zendesk</span>
                                        </a>
                                    </div>

                                    <div class="col-4">
                                        <a href="#" class="d-flex flex-column flex-center text-center text-secondary py-2 px-2 link-hoverable">
                                            <img src="/vendors/tabler/ui/static/brands/zoom.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                                            <span class="h5">Zoom</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 p-0 px-2" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <?php if(file_exists(FCPATH.'uploads/staff/profile_pictures/'.$logged_in_user->profile_picture.'.webp')): ?>
                    <span class="avatar avatar-sm" style="background-image: url(/uploads/staff/profile_pictures/<?= $logged_in_user->profile_picture ?>.webp)"> </span>
                    <?php else: ?>
                    <span class="avatar avatar-sm"> <?php $fullname = $logged_in_user->first_name.' '.$logged_in_user->last_name; $fullname = explode(' ', $fullname); foreach($fullname as $name) echo $name[0]; ?> </span>
                    <?php endif; ?>
                    <div class="d-none d-xl-block ps-2">
                        <div><?= $logged_in_user->first_name ?></div>
                        <div class="mt-1 small text-secondary"><?= $logged_in_user->last_name ?></div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="#" class="dropdown-item">Status</a>
                    <a href="./profile.html" class="dropdown-item">Profile</a>
                    <a href="#" class="dropdown-item">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a href="./settings.html" class="dropdown-item">Settings</a>
                    <a href="<?= route_to('page_logout') ?>" class="dropdown-item">Çıkış</a>
                </div>
            </div>
        </div>
    </div>
</header>

<header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
            <div class="container-xl">
                <div class="row flex-column flex-md-row flex-fill align-items-center">
                    <div class="col">
                        <!-- BEGIN NAVBAR MENU -->
                        <ul class="navbar-nav">
                            <li class="nav-item<?= url_is(route_to('page_dashboard')) ? ' active' : '' ?>">
                                <a class="nav-link" href="<?= route_to('page_dashboard') ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i class="icon ti ti-devices-2"></i>
                                    </span>
                                    <span class="nav-link-title"> Anasayfa </span>
                                </a>
                            </li>

                            <?php if($logged_in_user->user_level == 'admin'): ?>
                            <li class="nav-item<?= url_is(route_to('page_parking-lots-management').'*') ? ' active' : '' ?>">
                                <a class="nav-link" href="<?= route_to('page_parking-lots-management') ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i class="icon ti ti-parking-circle"></i>
                                    </span>
                                    <span class="nav-link-title">Otoparklar</span>
                                </a>
                            </li>

                            <li class="nav-item<?= url_is(route_to('page_staffs-management').'*') ? ' active' : '' ?>">
                                <a class="nav-link" href="<?= route_to('page_staffs-management') ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i class="icon ti ti-tie"></i>
                                    </span>
                                    <span class="nav-link-title">Personel</span>
                                </a>
                            </li>

                            <li class="nav-item<?= url_is(route_to('page_customers-management').'*') ? ' active' : '' ?>">
                                <a class="nav-link" href="<?= route_to('page_customers-management') ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i class="icon ti ti-heart-handshake"></i>
                                    </span>
                                    <span class="nav-link-title">Müşteriler</span>
                                </a>
                            </li>

                            <li class="nav-item<?= url_is(route_to('page_vehicles-management').'*') ? ' active' : '' ?>">
                                <a class="nav-link" href="<?= route_to('page_vehicles-management') ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i class="icon ti ti-wheel"></i>
                                    </span>
                                    <span class="nav-link-title">Araçlar</span>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if(in_array($logged_in_user->user_level, ['admin','receptionist'])): ?>
                            <li class="nav-item<?= url_is(route_to('page_parking-logs').'*') ? ' active' : '' ?>">
                                <a class="nav-link" href="<?= route_to('page_parking-logs') ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i class="icon ti ti-clipboard-list"></i>
                                    </span>
                                    <span class="nav-link-title">Park Kayıtları</span>
                                </a>
                            </li><?php endif; ?>

                            <li class="nav-item<?= url_is(route_to('page_work-orders').'*') ? ' active' : '' ?>">
                                <a class="nav-link" href="<?= route_to('page_work-orders') ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i class="icon ti ti-checkup-list"></i>
                                    </span>
                                    <span class="nav-link-title"> İş Emirleri </span>
                                </a>
                            </li>
                        </ul>
                        <!-- END NAVBAR MENU -->
                    </div>

                    <?php if($logged_in_user->user_level == 'admin'): ?>
                    <div class="col col-md-auto">
                        <ul class="navbar-nav">
                            <li class="nav-item<?= url_is(route_to('page_settings').'*') ? ' active' : '' ?>">
                                <a class="nav-link" href="<?= route_to('page_settings') ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                                        <i class="icon ti ti-settings"></i>
                                    </span>
                                    <span class="nav-link-title"> Ayarlar </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END NAVBAR  -->