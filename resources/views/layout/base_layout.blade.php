<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>GAF DEPLOYMENT SYSTEM</title>

    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/GAF.png') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-extend.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/site.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/animsition/animsition.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/asscrollable/asScrollable.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/switchery/switchery.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/intro-js/introjs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/slidepanel/slidePanel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/flag-icon-css/flag-icon.css') }}">

    <!-- Plugin -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/chartist-js/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables-bootstrap/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables-fixedheader/dataTables.fixedHeader.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables-responsive/dataTables.responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-wizard/jquery-wizard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/formvalidation/formValidation.css') }}">

    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/css/../fonts/weather-icons/weather-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/v1.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/web-icons/web-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/brand-icons/brand-icons.min.css') }}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


    <!--[if lt IE 9]>
    <script src="{{ asset('assets/vendor/html5shiv/html5shiv.min.js') }}"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="{{ asset('assets/vendor/media-match/media.match.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/respond/respond.min.js') }}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{ asset('assets/vendor/modernizr/modernizr.js') }}"></script>
    <script src="{{ asset('assets/vendor/breakpoints/breakpoints.js') }}"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="dashboard">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
                data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
                data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            <img class="navbar-brand-logo" src="{{ asset('assets/images/GAF.png') }}" title="Remark">
            <span class="navbar-brand-text">DEPLOY'T SYSTEM</span>
        </div>
    </div>

    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
                <li class="hidden-float" id="toggleMenubar">
                    <a data-toggle="menubar" href="#" role="button">
                        <i class="icon hamburger hamburger-arrow-left">
                            <span class="sr-only">Toggle menubar</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                <li class="hidden-xs" id="toggleFullscreen">
                    <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                        <span class="sr-only">Toggle fullscreen</span>
                    </a>
                </li>
                <li class="hidden-float">
                    <a class="icon wb-search" data-toggle="collapse" href="#site-navbar-search" role="button">
                        <span class="sr-only">Toggle Search</span>
                    </a>
                </li>

            </ul>
            <!-- End Navbar Toolbar -->

            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

                <li class="dropdown">
                    <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
                       data-animation="slide-bottom" role="button">
              <span class="avatar avatar-online">
                <img src="../assets/portraits/5.jpg" alt="...">
                <i></i>
              </span>
                    </a>
                    <ul class="dropdown-menu" role="menu">

                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
                        </li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation">
                            <a href="{{ url('logout') }}" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
                        </li>
                    </ul>
                </li>


            </ul>
            <!-- End Navbar Toolbar Right -->
        </div>

        <!-- End Navbar Collapse -->

        <!-- Site Navbar Seach -->
        @include('partials/side')
                <!-- Page -->

          @yield('content')

        <!-- Footer -->
        <footer class="site-footer">
            <span class="site-footer-legal">© 2015 Military</span>
        </footer>

        <!-- Core  -->
        <script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/vendor/animsition/jquery.animsition.js') }}"></script>
        <script src="{{ asset('assets/vendor/asscroll/jquery-asScroll.js') }}"></script>
        <script src="{{ asset('assets/vendor/mousewheel/jquery.mousewheel.js') }}"></script>
        <script src="{{ asset('assets/vendor/asscrollable/jquery.asScrollable.all.js') }}"></script>
        <script src="{{ asset('assets/vendor/ashoverscroll/jquery-asHoverScroll.js') }}"></script>

        <!-- Plugins -->
        <script src="{{ asset('assets/vendor/switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/intro-js/intro.js') }}"></script>
        <script src="{{ asset('assets/vendor/screenfull/screenfull.js') }}"></script>
        <script src="{{ asset('assets/vendor/slidepanel/jquery-slidePanel.js') }}"></script>

        <script src="{{ asset('assets/vendor/skycons/skycons.js') }}"></script>
        <script src="{{ asset('assets/vendor/chartist-js/chartist.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/aspieprogress/jquery-asPieProgress.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jvectormap/jquery-jvectormap.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jvectormap/maps/jquery-jvectormap-ca-lcc-en.js') }}"></script>
        <script src="{{ asset('assets/vendor/matchheight/jquery.matchHeight-min.js') }}"></script>


        <script src="{{ asset('assets/vendor/formvalidation/formValidation.js') }}"></script>
        <script src="{{ asset('assets/vendor/formvalidation/framework/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/vendor/matchheight/jquery.matchHeight-min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-wizard/jquery-wizard.js') }}"></script>

        <!-- Scripts -->
        <script src="{{ asset('assets/js/core.js') }}"></script>
        <script src="{{ asset('assets/js/site.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables-fixedheader/dataTables.fixedHeader.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables-bootstrap/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables-tabletools/dataTables.tableTools.js') }}"></script>

        <script src="{{ asset('assets/js/sections/menu.js') }}"></script>
        <script src="{{ asset('assets/js/sections/menubar.js') }}"></script>
        <script src="{{ asset('assets/js/sections/sidebar.js') }}"></script>

        <script src="{{ asset('assets/js/configs/config-colors.js') }}"></script>
        <script src="{{ asset('assets/js/configs/config-tour.js') }}"></script>

        <script src="{{ asset('assets/js/components/asscrollable.js') }}"></script>
        <script src="{{ asset('assets/js/components/animsition.js') }}"></script>
        <script src="{{ asset('assets/js/components/slidepanel.js') }}"></script>
        <script src="{{ asset('assets/js/components/switchery.js') }}"></script>
        <script src="{{ asset('assets/js/components/matchheight.js') }}"></script>
        <script src="{{ asset('assets/js/components/jvectormap.js') }}"></script>


        <script>
            (function(document, window, $) {
                'use strict';

                var Site = window.Site;

                $(document).ready(function($) {
                    Site.run();
                });

                // Example Wizard Form
                // -------------------
                (function() {
                    // set up formvalidation
                    $('#exampleAccountForm').formValidation({
                        framework: 'bootstrap',
                        fields: {
                            username: {
                                validators: {
                                    notEmpty: {
                                        message: 'The username is required'
                                    },
                                    stringLength: {
                                        min: 6,
                                        max: 30,
                                        message: 'The username must be more than 6 and less than 30 characters long'
                                    },
                                    regexp: {
                                        regexp: /^[a-zA-Z0-9_\.]+$/,
                                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                                    }
                                }
                            },
                            password: {
                                validators: {
                                    notEmpty: {
                                        message: 'The password is required'
                                    },
                                    different: {
                                        field: 'username',
                                        message: 'The password cannot be the same as username'
                                    }
                                }
                            }
                        }
                    });

                    $("#exampleBillingForm").formValidation({
                        framework: 'bootstrap',
                        fields: {
                            number: {
                                validators: {
                                    notEmpty: {
                                        message: 'The credit card number is required'
                                    }
                                    // creditCard: {
                                    //   message: 'The credit card number is not valid'
                                    // }
                                }
                            },
                            cvv: {
                                validators: {
                                    notEmpty: {
                                        message: 'The CVV number is required'
                                    }
                                    // cvv: {
                                    //   creditCardField: 'number',
                                    //   message: 'The CVV number is not valid'
                                    // }
                                }
                            }
                        }
                    });

                    // init the wizard
                    var defaults = $.components.getDefaults("wizard");
                    var options = $.extend(true, {}, defaults, {
                        buttonsAppendTo: '.panel-body'
                    });

                    var wizard = $("#exampleWizardForm").wizard(options).data(
                            'wizard');

                    // setup validator
                    // http://formvalidation.io/api/#is-valid
                    wizard.get("#exampleAccount").setValidator(function() {
                        var fv = $("#exampleAccountForm").data('formValidation');
                        fv.validate();

                        if (!fv.isValid()) {
                            return false;
                        }

                        return true;
                    });

                    wizard.get("#exampleBilling").setValidator(function() {
                        var fv = $("#exampleBillingForm").data('formValidation');
                        fv.validate();

                        if (!fv.isValid()) {
                            return false;
                        }

                        return true;
                    });
                })();

                // Example Wizard Form Container
                // -----------------------------
                // http://formvalidation.io/api/#is-valid-container
                (function() {
                    var defaults = $.components.getDefaults("wizard");
                    var options = $.extend(true, {}, defaults, {
                        onInit: function() {
                            $('#exampleFormContainer').formValidation({
                                framework: 'bootstrap',
                                fields: {
                                    username: {
                                        validators: {
                                            notEmpty: {
                                                message: 'The username is required'
                                            }
                                        }
                                    },
                                    password: {
                                        validators: {
                                            notEmpty: {
                                                message: 'The password is required'
                                            }
                                        }
                                    },
                                    number: {
                                        validators: {
                                            notEmpty: {
                                                message: 'The credit card number is not valid'
                                            }
                                        }
                                    },
                                    cvv: {
                                        validators: {
                                            notEmpty: {
                                                message: 'The CVV number is required'
                                            }
                                        }
                                    }
                                }
                            });
                        },
                        validator: function() {
                            var fv = $('#exampleFormContainer').data(
                                    'formValidation');

                            var $this = $(this);

                            // Validate the container
                            fv.validateContainer($this);

                            var isValidStep = fv.isValidContainer($this);
                            if (isValidStep === false || isValidStep === null) {
                                return false;
                            }

                            return true;
                        },
                        onFinish: function() {
                            // $('#exampleFormContainer').submit();
                        },
                        buttonsAppendTo: '.panel-body'
                    });

                    $("#exampleWizardFormContainer").wizard(options);
                })();

                // Example Wizard Pager
                // --------------------------
                (function() {
                    var defaults = $.components.getDefaults("wizard");

                    var options = $.extend(true, {}, defaults, {
                        step: '.wizard-pane',
                        templates: {
                            buttons: function() {
                                var options = this.options;
                                return
                                '<div class="btn-group" aria-label="Wizard Pager" role="group">' +
                                '<button class="btn btn-default btn-outline" data-target="#' +
                                this.id +
                                '" data-wizard="back"><i class="icon wb-chevron-left" aria-hidden="true"></i></button>' +
                                '<button class="btn btn-default btn-outline" data-target="#' +
                                this.id +
                                '" data-wizard="next"><i class="icon wb-chevron-right" aria-hidden="true"></i></button>' +
                                '<button class="btn btn-default btn-outline" data-target="#' +
                                this.id +
                                '" data-wizard="finish"><i class="icon wb-check" aria-hidden="true"></i></button>' +
                                '</div>';
                            }
                        },
                        buttonsAppendTo: '.panel-actions'
                    });

                    $("#exampleWizardPager").wizard(options);
                })();

                // Example Wizard Progressbar
                // --------------------------
                (function() {
                    var defaults = $.components.getDefaults("wizard");

                    var options = $.extend(true, {}, defaults, {
                        step: '.wizard-pane',
                        onInit: function() {
                            this.$progressbar = this.$element.find('.progress-bar')
                                    .addClass('progress-bar-striped');
                        },
                        onBeforeShow: function(step) {
                            step.$element.tab('show');
                        },
                        onFinish: function() {
                            this.$progressbar.removeClass('progress-bar-striped').addClass(
                                    'progress-bar-success');
                        },
                        onAfterChange: function(prev, step) {
                            var total = this.length();
                            var current = step.index + 1;
                            var percent = (current / total) * 100;

                            this.$progressbar.css({
                                width: percent + '%'
                            }).find('.sr-only').text(current + '/' + total);
                        },
                        buttonsAppendTo: '.panel-body'
                    });

                    $("#exampleWizardProgressbar").wizard(options);
                })();

                // Example Wizard Tabs
                // -------------------
                (function() {
                    var defaults = $.components.getDefaults("wizard");
                    var options = $.extend(true, {}, defaults, {
                        step: '> .nav > li > a',
                        onBeforeShow: function(step) {
                            step.$element.tab('show');
                        },
                        classes: {
                            step: {
                                //done: 'color-done',
                                error: 'color-error'
                            }
                        },
                        onFinish: function() {
                            alert('finish');
                        },
                        buttonsAppendTo: '.tab-content'
                    });

                    $("#exampleWizardTabs").wizard(options);
                })();

                // Example Wizard Accordion
                // ------------------------
                (function() {
                    var defaults = $.components.getDefaults("wizard");
                    var options = $.extend(true, {}, defaults, {
                        step: '.panel-title[data-toggle="collapse"]',
                        classes: {
                            step: {
                                //done: 'color-done',
                                error: 'color-error'
                            }
                        },
                        templates: {
                            buttons: function() {
                                return '<div class="panel-footer">' + defaults.templates
                                                .buttons.call(this) + '</div>';
                            }
                        },
                        onBeforeShow: function(step) {
                            step.$pane.collapse('show');
                        },

                        onBeforeHide: function(step) {
                            step.$pane.collapse('hide');
                        },

                        onFinish: function() {
                            alert('finish');
                        },

                        buttonsAppendTo: '.panel-collapse'
                    });

                    $("#exampleWizardAccordion").wizard(options);
                })();

            })(document, window, jQuery);
        </script>

        <script>
            $(document).ready(function($) {
                Site.run();

                (function() {
                    var snow = new Skycons({
                        "color": $.colors("blue-grey", 500)
                    });
                    snow.set(document.getElementById("widgetSnow"), "snow");
                    snow.play();

                    var sunny = new Skycons({
                        "color": $.colors("blue-grey", 700)
                    });
                    sunny.set(document.getElementById("widgetSunny"), "clear-day");
                    sunny.play();
                })();

                (function() {
                    var lineareaColor = new Chartist.Line(
                            '#widgetLineareaColor .ct-chart', {
                                labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
                                series: [
                                    [4, 4.5, 4.3, 4, 5, 6, 5.5],
                                    [3, 2.5, 3, 3.5, 4.2, 4, 5],
                                    [1, 2, 2.5, 2, 3, 2.8, 4]
                                ]
                            }, {
                                low: 0,
                                showArea: true,
                                showPoint: false,
                                showLine: false,
                                fullWidth: true,
                                chartPadding: {
                                    top: 0,
                                    right: 0,
                                    bottom: 0,
                                    left: 0
                                },
                                axisX: {
                                    showLabel: false,
                                    showGrid: false,
                                    offset: 0
                                },
                                axisY: {
                                    showLabel: false,
                                    showGrid: false,
                                    offset: 0
                                }
                            });
                })();

                (function() {
                    var stacked_bar = new Chartist.Bar(
                            '#widgetStackedBar .ct-chart', {
                                labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
                                    'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U',
                                    'V', 'W', 'X', 'Y', 'Z'
                                ],
                                series: [
                                    [50, 90, 100, 90, 110, 100, 120, 130, 115, 95, 80, 85,
                                        100, 140, 130, 120, 135, 110, 120, 105, 100, 105,
                                        90, 110, 100, 60
                                    ],
                                    [150, 190, 200, 190, 210, 200, 220, 230, 215, 195,
                                        180, 185, 200, 240, 230, 220, 235, 210, 220, 205,
                                        200, 205, 190, 210, 200, 160
                                    ]
                                ]
                            }, {
                                stackBars: true,
                                fullWidth: true,
                                seriesBarDistance: 0,
                                chartPadding: {
                                    top: 0,
                                    right: 30,
                                    bottom: 30,
                                    left: 20
                                },
                                axisX: {
                                    showLabel: false,
                                    showGrid: false,
                                    offset: 0
                                },
                                axisY: {
                                    showLabel: false,
                                    showGrid: false,
                                    offset: 0
                                }
                            });
                })();

                // timeline
                // --------
                (function() {
                    var timeline_labels = [];
                    var timeline_data1 = [];
                    var timeline_data2 = [];
                    var totalPoints = 20;
                    var updateInterval = 1000;
                    var now = new Date().getTime();

                    function GetData() {
                        timeline_labels.shift();
                        timeline_data1.shift();
                        timeline_data2.shift();

                        while (timeline_data1.length < totalPoints) {
                            var x = Math.random() * 100 + 800;
                            var y = Math.random() * 100 + 400;
                            timeline_labels.push(now += updateInterval);
                            timeline_data1.push(x);
                            timeline_data2.push(y);
                        }
                    }

                    var timlelineData = {
                        labels: timeline_labels,
                        series: [
                            timeline_data1,
                            timeline_data2
                        ]
                    };

                    var timelineOptions = {
                        low: 0,
                        showArea: true,
                        showPoint: false,
                        showLine: false,
                        fullWidth: true,
                        chartPadding: {
                            top: 0,
                            right: 0,
                            bottom: 0,
                            left: 0
                        },
                        axisX: {
                            showLabel: false,
                            showGrid: false,
                            offset: 0
                        },
                        axisY: {
                            showLabel: false,
                            showGrid: false,
                            offset: 0
                        }
                    };
                    new Chartist.Line("#widgetTimeline .ct-chart", timlelineData,
                            timelineOptions);

                    function update() {
                        GetData();

                        new Chartist.Line("#widgetTimeline .ct-chart", timlelineData,
                                timelineOptions);
                        setTimeout(update, updateInterval);
                    }

                    update();

                })();

                (function() {
                    new Chartist.Line("#widgetLinepoint .ct-chart", {
                        labels: ['1', '2', '3', '4', '5', '6'],
                        series: [
                            [1, 1.5, 0.5, 2, 2.5, 1.5]
                        ]
                    }, {
                        low: 0,
                        showArea: false,
                        showPoint: true,
                        showLine: true,
                        fullWidth: true,
                        lineSmooth: false,
                        chartPadding: {
                            top: -10,
                            right: -4,
                            bottom: 10,
                            left: -4
                        },
                        axisX: {
                            showLabel: false,
                            showGrid: false,
                            offset: 0
                        },
                        axisY: {
                            showLabel: false,
                            showGrid: false,
                            offset: 0
                        }
                    });
                })();

                (function() {
                    new Chartist.Bar("#widgetSaleBar .ct-chart", {
                        labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'K',
                            'L', 'M', 'N', 'O', 'P', 'Q'
                        ],
                        series: [
                            [50, 90, 100, 90, 110, 100, 120, 130, 115, 95, 80, 85,
                                100, 140, 130, 120
                            ]
                        ]
                    }, {
                        low: 0,
                        fullWidth: true,
                        chartPadding: {
                            top: -10,
                            right: 20,
                            bottom: 30,
                            left: 20
                        },
                        axisX: {
                            showLabel: false,
                            showGrid: false,
                            offset: 0
                        },
                        axisY: {
                            showLabel: false,
                            showGrid: false,
                            offset: 0
                        }
                    });
                })();

                (function() {
                    new Chartist.Bar("#widgetWatchList .small-bar-one", {
                        labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'],
                        series: [
                            [50, 90, 100, 90, 110, 100, 120, 130]
                        ]
                    }, {
                        low: 0,
                        fullWidth: true,
                        chartPadding: {
                            top: -10,
                            right: 0,
                            bottom: 0,
                            left: 20
                        },
                        axisX: {
                            showLabel: false,
                            showGrid: false,
                            offset: 0
                        },
                        axisY: {
                            showLabel: false,
                            showGrid: false,
                            offset: 0
                        }
                    });

                    new Chartist.Bar("#widgetWatchList .small-bar-two", {
                        labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'],
                        series: [
                            [50, 90, 100, 90, 110, 100, 120, 120]
                        ]
                    }, {
                        low: 0,
                        fullWidth: true,
                        chartPadding: {
                            top: -10,
                            right: 0,
                            bottom: 0,
                            left: 20
                        },
                        axisX: {
                            showLabel: false,
                            showGrid: false,
                            offset: 0
                        },
                        axisY: {
                            showLabel: false,
                            showGrid: false,
                            offset: 0
                        }
                    });

                    new Chartist.Line("#widgetWatchList .line-chart", {
                        labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
                        series: [
                            [20, 50, 70, 110, 100, 200, 230],
                            [50, 80, 140, 130, 150, 110, 160]
                        ]
                    }, {
                        low: 0,
                        showArea: false,
                        showPoint: false,
                        showLine: true,
                        lineSmooth: false,
                        fullWidth: true,
                        chartPadding: {
                            top: 0,
                            right: 10,
                            bottom: 0,
                            left: 10
                        },
                        axisX: {
                            showLabel: true,
                            showGrid: false,
                            offset: 30
                        },
                        axisY: {
                            showLabel: true,
                            showGrid: true,
                            offset: 30
                        }
                    });
                })();

                (function() {
                    new Chartist.Line("#widgetLinepointDate .ct-chart", {
                        labels: ['1', '2', '3', '4', '5', '6'],
                        series: [
                            [1, 1.5, 0.5, 2, 2.5, 1.5]
                        ]
                    }, {
                        low: 0,
                        showArea: false,
                        showPoint: true,
                        showLine: true,
                        fullWidth: true,
                        lineSmooth: false,
                        chartPadding: {
                            top: 0,
                            right: -4,
                            bottom: 10,
                            left: -4
                        },
                        axisX: {
                            showLabel: false,
                            showGrid: false,
                            offset: 0
                        },
                        axisY: {
                            showLabel: false,
                            showGrid: false,
                            offset: 0
                        }
                    });

                })();

            });
        </script>
        <script>
            (function(document, window, $) {
                'use strict';

                var Site = window.Site;

                $(document).ready(function($) {
                    Site.run();
                });

                // Fixed Header Example
                // --------------------
                (function() {
                    // initialize datatable
                    var table = $('#exampleFixedHeader').DataTable({
                        responsive: true,
                        "bPaginate": false,
                        "sDom": "t" // just show table, no other controls
                    });

                    // initialize FixedHeader
                    var offsetTop = 0;
                    if ($('.site-navbar').length > 0) {
                        offsetTop = $('.site-navbar').eq(0).innerHeight();
                    }
                    var fixedHeader = new FixedHeader(table, {
                        offsetTop: offsetTop
                    });

                    // redraw fixedHeaders as necessary
                    $(window).resize(function() {
                        fixedHeader._fnUpdateClones(true);
                        fixedHeader._fnUpdatePositions();
                    });
                })();

                // Individual column searching
                // ---------------------------
                (function() {
                    $(document).ready(function() {
                        var defaults = $.components.getDefaults("dataTable");

                        var options = $.extend(true, {}, defaults, {
                            initComplete: function() {
                                this.api().columns().every(function() {
                                    var column = this;
                                    var select = $(
                                            '<select class="form-control width-full"><option value=""></option></select>'
                                    )
                                            .appendTo($(column.footer()).empty())
                                            .on('change', function() {
                                                var val = $.fn.dataTable.util.escapeRegex(
                                                        $(this).val()
                                                );

                                                column
                                                        .search(val ? '^' + val + '$' : '',
                                                        true, false)
                                                        .draw();
                                            });

                                    column.data().unique().sort().each(function(
                                            d, j) {
                                        select.append('<option value="' + d +
                                                '">' + d + '</option>')
                                    });
                                });
                            }
                        });

                        $('#exampleTableSearch').DataTable(options);
                    });
                })();

                // Table Tools
                // -----------
                (function() {
                    $(document).ready(function() {
                        var defaults = $.components.getDefaults("dataTable");

                        var options = $.extend(true, {}, defaults, {
                            "aoColumnDefs": [{
                                'bSortable': false,
                                'aTargets': [-1]
                            }],
                            "iDisplayLength": 5,
                            "aLengthMenu": [
                                [5, 10, 25, 50, -1],
                                [5, 10, 25, 50, "All"]
                            ],
                            "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
                            "oTableTools": {
                                "sSwfPath": "../../assets/vendor/datatables-tabletools/swf/copy_csv_xls_pdf.swf"
                            }
                        });

                        $('#exampleTableTools').dataTable(options);
                    });
                })();

                // Table Add Row
                // -------------

                (function() {
                    $(document).ready(function() {
                        var defaults = $.components.getDefaults("dataTable");

                        var t = $('#exampleTableAdd').DataTable(defaults);

                        $('#exampleTableAddBtn').on('click', function() {
                            t.row.add([
                                'Adam Doe',
                                'New Row',
                                'New Row',
                                '30',
                                '2015/10/15',
                                '$20000'
                            ]).draw();
                        });
                    });
                })();
            })(document, window, jQuery);
        </script>

</body>

</html>