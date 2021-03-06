<!DOCTYPE html>
<!-- saved from url=(0070)https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_invoice.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>
            Invoice - Page Views - SmartAdmin v4.5.1
        </title>
        <meta name="description" content="Invoice">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- base css -->
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="./Invoice - Page Views - SmartAdmin v4.5.1_files/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="./Invoice - Page Views - SmartAdmin v4.5.1_files/app.bundle.css">
        <link id="mytheme" rel="stylesheet" media="screen, print" href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html">
        <link id="myskin" rel="stylesheet" media="screen, print" href="./Invoice - Page Views - SmartAdmin v4.5.1_files/skin-master.css">
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="180x180" href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/img/favicon/favicon-32x32.png">
        <link rel="mask-icon" href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="stylesheet" media="screen, print" href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page-invoice.css">
    </head>
    <!-- BEGIN Body -->
    <!-- Possible Classes

		* 'header-function-fixed'         - header is in a fixed at all times
		* 'nav-function-fixed'            - left panel is fixed
		* 'nav-function-minify'			  - skew nav to maximize space
		* 'nav-function-hidden'           - roll mouse on edge to reveal
		* 'nav-function-top'              - relocate left pane to top
		* 'mod-main-boxed'                - encapsulates to a container
		* 'nav-mobile-push'               - content pushed on menu reveal
		* 'nav-mobile-no-overlay'         - removes mesh on menu reveal
		* 'nav-mobile-slide-out'          - content overlaps menu
		* 'mod-bigger-font'               - content fonts are bigger for readability
		* 'mod-high-contrast'             - 4.5:1 text contrast ratio
		* 'mod-color-blind'               - color vision deficiency
		* 'mod-pace-custom'               - preloader will be inside content
		* 'mod-clean-page-bg'             - adds more whitespace
		* 'mod-hide-nav-icons'            - invisible navigation icons
		* 'mod-disable-animation'         - disables css based animations
		* 'mod-hide-info-card'            - hides info card from left panel
		* 'mod-lean-subheader'            - distinguished page header
		* 'mod-nav-link'                  - clear breakdown of nav links

		>>> more settings are described inside documentation page >>>
	-->
    <body class="mod-bg-1 mod-nav-link desktop chrome webkit pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
        <!-- DOC: script to save and load page settings -->
        <script async="" src="./Invoice - Page Views - SmartAdmin v4.5.1_files/analytics.js.download"></script><script>
            /**
             *	This script should be placed right after the body tag for fast execution 
             *	Note: the script is written in pure javascript and does not depend on thirdparty library
             **/
            'use strict';

            var classHolder = document.getElementsByTagName("BODY")[0],
                /** 
                 * Load from localstorage
                 **/
                themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
                {},
                themeURL = themeSettings.themeURL || '',
                themeOptions = themeSettings.themeOptions || '';
            /** 
             * Load theme options
             **/
            if (themeSettings.themeOptions)
            {
                classHolder.className = themeSettings.themeOptions;
                console.log("%c??? Theme settings loaded", "color: #148f32");
            }
            else
            {
                console.log("%c??? Heads up! Theme settings is empty or does not exist, loading default settings...", "color: #ed1c24");
            }
            if (themeSettings.themeURL && !document.getElementById('mytheme'))
            {
                var cssfile = document.createElement('link');
                cssfile.id = 'mytheme';
                cssfile.rel = 'stylesheet';
                cssfile.href = themeURL;
                document.getElementsByTagName('head')[0].appendChild(cssfile);

            }
            else if (themeSettings.themeURL && document.getElementById('mytheme'))
            {
                document.getElementById('mytheme').href = themeSettings.themeURL;
            }
            /** 
             * Save to localstorage 
             **/
            var saveSettings = function()
            {
                themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
                {
                    return /^(nav|header|footer|mod|display)-/i.test(item);
                }).join(' ');
                if (document.getElementById('mytheme'))
                {
                    themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
                };
                localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
            }
            /** 
             * Reset settings
             **/
            var resetSettings = function()
            {
                localStorage.setItem("themeSettings", "");
            }

        </script>
        <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper">
            <div class="page-inner">
                <!-- BEGIN Left Aside -->
                <aside class="page-sidebar">
                    <div class="page-logo">
                        <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                            <img src="./Invoice - Page Views - SmartAdmin v4.5.1_files/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                            <span class="page-logo-text mr-1">SmartAdmin WebApp</span>
                            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                        </a>
                    </div>
                    <!-- BEGIN PRIMARY NAVIGATION -->
                    <nav id="js-primary-nav" class="primary-nav js-list-filter" role="navigation">
                        <div class="nav-filter">
                            <div class="position-relative">
                                <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                                    <i class="fal fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="info-card">
                            <img src="./Invoice - Page Views - SmartAdmin v4.5.1_files/avatar-admin.png" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
                            <div class="info-card-text">
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="d-flex align-items-center text-white">
                                    <span class="text-truncate text-truncate-sm d-inline-block">
                                        Dr. Codex Lantern
                                    </span>
                                </a>
                                <span class="d-inline-block text-truncate text-truncate-sm">Toronto, Canada</span>
                            </div>
                            <img src="./Invoice - Page Views - SmartAdmin v4.5.1_files/cover-2-lg.png" class="cover" alt="cover">
                            <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                                <i class="fal fa-angle-down"></i>
                            </a>
                        </div>
                        <ul id="js-nav-menu" class="nav-menu js-nav-built">
                            <li>
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" title="Application Intel" data-filter-tags="application intel" class=" waves-effect waves-themed">
                                    <i class="fal fa-info-circle"></i>
                                    <span class="nav-link-text" data-i18n="nav.application_intel">Application Intel</span>
                                <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                <ul>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/intel_analytics_dashboard.html" title="Analytics Dashboard" data-filter-tags="application intel analytics dashboard" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard">Analytics Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/intel_marketing_dashboard.html" title="Marketing Dashboard" data-filter-tags="application intel marketing dashboard" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.application_intel_marketing_dashboard">Marketing Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/intel_introduction.html" title="Introduction" data-filter-tags="application intel introduction" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Introduction</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/intel_privacy.html" title="Privacy" data-filter-tags="application intel privacy" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.application_intel_privacy">Privacy</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" title="Theme Settings" data-filter-tags="theme settings" class=" waves-effect waves-themed">
                                    <i class="fal fa-cog"></i>
                                    <span class="nav-link-text" data-i18n="nav.theme_settings">Theme Settings</span>
                                <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                <ul>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/settings_how_it_works.html" title="How it works" data-filter-tags="theme settings how it works" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">How it works</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/settings_layout_options.html" title="Layout Options" data-filter-tags="theme settings layout options" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.theme_settings_layout_options">Layout Options</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/settings_theme_modes.html" title="Theme Modes (beta)" data-filter-tags="theme settings theme modes (beta)" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.theme_settings_theme_modes_(beta)">Theme Modes (beta)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/settings_skin_options.html" title="Skin Options" data-filter-tags="theme settings skin options" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.theme_settings_skin_options">Skin Options</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/settings_saving_db.html" title="Saving to Database" data-filter-tags="theme settings saving to database" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.theme_settings_saving_to_database">Saving to Database</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" title="Documentation" data-filter-tags="documentation" class=" waves-effect waves-themed">
                                    <i class="fal fa-book"></i>
                                    <span class="nav-link-text" data-i18n="nav.documentation">Documentation</span>
                                <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                <ul>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/docs_general.html" title="General Docs" data-filter-tags="documentation general docs" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.documentation_general_docs">General Docs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/docs_project_structure.html" title="Project Structure" data-filter-tags="documentation project structure" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.documentation_project_structure">Project Structure</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/docs_flavors_editions.html" title="Flavors &amp; Editions" data-filter-tags="documentation flavors &amp; editions" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.documentation_flavors_&amp;_editions">Flavors &amp; Editions</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/docs_community_support.html" title="Community Support" data-filter-tags="documentation community support" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.documentation_community_support">Community Support</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/docs_premium_support.html" title="Premium Support" data-filter-tags="documentation premium support" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.documentation_premium_support">Premium Support</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/docs_licensing.html" title="Licensing" data-filter-tags="documentation licensing" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.documentation_licensing">Licensing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/docs_buildnotes.html" title="Build Notes" data-filter-tags="documentation build notes" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.documentation_build_notes">Build Notes</span>
                                            <span class="">v4.5.1</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-title">Tools &amp; Components</li>
                            <li>
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" title="UI Components" data-filter-tags="ui components" class=" waves-effect waves-themed">
                                    <i class="fal fa-window"></i>
                                    <span class="nav-link-text" data-i18n="nav.ui_components">UI Components</span>
                                <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                <ul>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_alerts.html" title="Alerts" data-filter-tags="ui components alerts" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_alerts">Alerts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_accordion.html" title="Accordions" data-filter-tags="ui components accordions" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_accordions">Accordions</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_badges.html" title="Badges" data-filter-tags="ui components badges" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_badges">Badges</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_breadcrumbs.html" title="Breadcrumbs" data-filter-tags="ui components breadcrumbs" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_breadcrumbs">Breadcrumbs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_buttons.html" title="Buttons" data-filter-tags="ui components buttons" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_buttons">Buttons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_button_group.html" title="Button Group" data-filter-tags="ui components button group" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_button_group">Button Group</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_cards.html" title="Cards" data-filter-tags="ui components cards" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_cards">Cards</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_carousel.html" title="Carousel" data-filter-tags="ui components carousel" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_carousel">Carousel</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_collapse.html" title="Collapse" data-filter-tags="ui components collapse" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_collapse">Collapse</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_dropdowns.html" title="Dropdowns" data-filter-tags="ui components dropdowns" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_dropdowns">Dropdowns</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_list_filter.html" title="List Filter" data-filter-tags="ui components list filter" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_list_filter">List Filter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_modal.html" title="Modal" data-filter-tags="ui components modal" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_modal">Modal</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_navbars.html" title="Navbars" data-filter-tags="ui components navbars" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_navbars">Navbars</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_panels.html" title="Panels" data-filter-tags="ui components panels" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_panels">Panels</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_pagination.html" title="Pagination" data-filter-tags="ui components pagination" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_pagination">Pagination</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_popovers.html" title="Popovers" data-filter-tags="ui components popovers" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_popovers">Popovers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_progress_bars.html" title="Progress Bars" data-filter-tags="ui components progress bars" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_progress_bars">Progress Bars</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_scrollspy.html" title="ScrollSpy" data-filter-tags="ui components scrollspy" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_scrollspy">ScrollSpy</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_side_panel.html" title="Side Panel" data-filter-tags="ui components side panel" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_side_panel">Side Panel</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_spinners.html" title="Spinners" data-filter-tags="ui components spinners" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_spinners">Spinners</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_tabs_pills.html" title="Tabs &amp; Pills" data-filter-tags="ui components tabs &amp; pills" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_tabs_&amp;_pills">Tabs &amp; Pills</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_toasts.html" title="Toasts" data-filter-tags="ui components toasts" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_toasts">Toasts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/ui_tooltips.html" title="Tooltips" data-filter-tags="ui components tooltips" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.ui_components_tooltips">Tooltips</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" title="Utilities" data-filter-tags="utilities" class=" waves-effect waves-themed">
                                    <i class="fal fa-bolt"></i>
                                    <span class="nav-link-text" data-i18n="nav.utilities">Utilities</span>
                                <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                <ul>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/utilities_borders.html" title="Borders" data-filter-tags="utilities borders" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.utilities_borders">Borders</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/utilities_clearfix.html" title="Clearfix" data-filter-tags="utilities clearfix" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.utilities_clearfix">Clearfix</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/utilities_color_pallet.html" title="Color Pallet" data-filter-tags="utilities color pallet" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.utilities_color_pallet">Color Pallet</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/utilities_display_property.html" title="Display Property" data-filter-tags="utilities display property" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.utilities_display_property">Display Property</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/utilities_fonts.html" title="Fonts" data-filter-tags="utilities fonts" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.utilities_fonts">Fonts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/utilities_flexbox.html" title="Flexbox" data-filter-tags="utilities flexbox" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.utilities_flexbox">Flexbox</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/utilities_helpers.html" title="Helpers" data-filter-tags="utilities helpers" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.utilities_helpers">Helpers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/utilities_position.html" title="Position" data-filter-tags="utilities position" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.utilities_position">Position</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/utilities_responsive_grid.html" title="Responsive Grid" data-filter-tags="utilities responsive grid" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.utilities_responsive_grid">Responsive Grid</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/utilities_sizing.html" title="Sizing" data-filter-tags="utilities sizing" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.utilities_sizing">Sizing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/utilities_spacing.html" title="Spacing" data-filter-tags="utilities spacing" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.utilities_spacing">Spacing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/utilities_typography.html" title="Typography" data-filter-tags="utilities typography fonts headings bold lead colors sizes link text states list styles truncate alignment" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.utilities_typography">Typography</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="Menu child" data-filter-tags="utilities menu child" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.utilities_menu_child">Menu child</span>
                                        <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);" title="Sublevel Item" data-filter-tags="utilities menu child sublevel item" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.utilities_menu_child_sublevel_item">Sublevel Item</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" title="Another Item" data-filter-tags="utilities menu child another item" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.utilities_menu_child_another_item">Another Item</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="disabled">
                                        <a href="javascript:void(0);" title="Disabled item" data-filter-tags="utilities disabled item" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.utilities_disabled_item">Disabled item</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" title="Font Icons" data-filter-tags="font icons" class=" waves-effect waves-themed">
                                    <i class="fal fa-map-marker-alt"></i>
                                    <span class="nav-link-text" data-i18n="nav.font_icons">Font Icons</span>
                                    <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">7,500+</span>
                                <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);" title="FontAwesome" data-filter-tags="font icons fontawesome" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome">FontAwesome Pro</span>
                                        <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                        <ul>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/icons_fontawesome_light.html" title="Light" data-filter-tags="font icons fontawesome light" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_light">Light</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/icons_fontawesome_regular.html" title="Regular" data-filter-tags="font icons fontawesome regular" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_regular">Regular</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/icons_fontawesome_solid.html" title="Solid" data-filter-tags="font icons fontawesome solid" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_solid">Solid</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/icons_fontawesome_duotone.html" title="Duotone" data-filter-tags="font icons fontawesome duotone" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_duotone">Duotone</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/icons_fontawesome_brand.html" title="Brand" data-filter-tags="font icons fontawesome brand" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_brand">Brand</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="NextGen Icons" data-filter-tags="font icons nextgen icons" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.font_icons_nextgen_icons">NextGen Icons</span>
                                        <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                        <ul>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/icons_nextgen_general.html" title="General" data-filter-tags="font icons nextgen icons general" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_nextgen_icons_general">General</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/icons_nextgen_base.html" title="Base" data-filter-tags="font icons nextgen icons base" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_nextgen_icons_base">Base</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="Stack Icons" data-filter-tags="font icons stack icons" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.font_icons_stack_icons">Stack Icons</span>
                                        <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                        <ul>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/icons_stack_showcase.html" title="Showcase" data-filter-tags="font icons stack icons showcase" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_stack_icons_showcase">Showcase</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/icons_stack_generate.html?layers=3" title="Generate Stack" data-filter-tags="font icons stack icons generate stack" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.font_icons_stack_icons_generate_stack">Generate Stack</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" title="Tables" data-filter-tags="tables" class=" waves-effect waves-themed">
                                    <i class="fal fa-th-list"></i>
                                    <span class="nav-link-text" data-i18n="nav.tables">Tables</span>
                                <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                <ul>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/tables_basic.html" title="Basic Tables" data-filter-tags="tables basic tables" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.tables_basic_tables">Basic Tables</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/tables_generate_style.html" title="Generate Table Style" data-filter-tags="tables generate table style" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.tables_generate_table_style">Generate Table Style</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" title="Form Stuff" data-filter-tags="form stuff" class=" waves-effect waves-themed">
                                    <i class="fal fa-edit"></i>
                                    <span class="nav-link-text" data-i18n="nav.form_stuff">Form Stuff</span>
                                <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                <ul>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/form_basic_inputs.html" title="Basic Inputs" data-filter-tags="form stuff basic inputs" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.form_stuff_basic_inputs">Basic Inputs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/form_checkbox_radio.html" title="Checkbox &amp; Radio" data-filter-tags="form stuff checkbox &amp; radio" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.form_stuff_checkbox_&amp;_radio">Checkbox &amp; Radio</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/form_input_groups.html" title="Input Groups" data-filter-tags="form stuff input groups" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.form_stuff_input_groups">Input Groups</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/form_validation.html" title="Validation" data-filter-tags="form stuff validation" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.form_stuff_validation">Validation</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-title">Plugins &amp; Addons</li>
                            <li>
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" title="Plugins" data-filter-tags="plugins" class=" waves-effect waves-themed">
                                    <i class="fal fa-shield-alt"></i>
                                    <span class="nav-link-text" data-i18n="nav.plugins">Core Plugins</span>
                                <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                <ul>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/plugins_faq.html" title="Plugins FAQ" data-filter-tags="plugins plugins faq" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.plugins_plugins_faq">Plugins FAQ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/plugins_waves.html" title="Waves" data-filter-tags="plugins waves" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.plugins_waves">Waves</span>
                                            <span class="dl-ref label bg-primary-400 ml-2">9 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/plugins_pacejs.html" title="PaceJS" data-filter-tags="plugins pacejs" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.plugins_pacejs">PaceJS</span>
                                            <span class="dl-ref label bg-primary-500 ml-2">13 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/plugins_smartpanels.html" title="SmartPanels" data-filter-tags="plugins smartpanels" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.plugins_smartpanels">SmartPanels</span>
                                            <span class="dl-ref label bg-primary-600 ml-2">9 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/plugins_bootbox.html" title="BootBox" data-filter-tags="plugins bootbox alert sound" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.plugins_bootbox">BootBox</span>
                                            <span class="dl-ref label bg-primary-600 ml-2">15 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/plugins_slimscroll.html" title="Slimscroll" data-filter-tags="plugins slimscroll" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.plugins_slimscroll">Slimscroll</span>
                                            <span class="dl-ref label bg-primary-700 ml-2">5 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/plugins_throttle.html" title="Throttle" data-filter-tags="plugins throttle" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.plugins_throttle">Throttle</span>
                                            <span class="dl-ref label bg-primary-700 ml-2">1 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/plugins_navigation.html" title="Navigation" data-filter-tags="plugins navigation" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.plugins_navigation">Navigation</span>
                                            <span class="dl-ref label bg-primary-700 ml-2">2 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/plugins_i18next.html" title="i18next" data-filter-tags="plugins i18next" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.plugins_i18next">i18next</span>
                                            <span class="dl-ref label bg-primary-700 ml-2">10 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/plugins_appcore.html" title="App.Core" data-filter-tags="plugins app.core" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.plugins_app.core">App.Core</span>
                                            <span class="dl-ref label bg-success-700 ml-2">14 KB</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" title="Datatables" data-filter-tags="datatables datagrid" class=" waves-effect waves-themed">
                                    <i class="fal fa-table"></i>
                                    <span class="nav-link-text" data-i18n="nav.datatables">Datatables</span>
                                    <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">235 KB</span>
                                <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                <ul>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/datatables_basic.html" title="Basic" data-filter-tags="datatables datagrid basic" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.datatables_basic">Basic</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/datatables_autofill.html" title="Autofill" data-filter-tags="datatables datagrid autofill" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.datatables_autofill">Autofill</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/datatables_buttons.html" title="Buttons" data-filter-tags="datatables datagrid buttons" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.datatables_buttons">Buttons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/datatables_export.html" title="Export" data-filter-tags="datatables datagrid export tables pdf excel print csv" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.datatables_export">Export</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/datatables_colreorder.html" title="ColReorder" data-filter-tags="datatables datagrid colreorder" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.datatables_colreorder">ColReorder</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/datatables_columnfilter.html" title="ColumnFilter" data-filter-tags="datatables datagrid columnfilter" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.datatables_columnfilter">ColumnFilter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/datatables_fixedcolumns.html" title="FixedColumns" data-filter-tags="datatables datagrid fixedcolumns" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.datatables_fixedcolumns">FixedColumns</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/datatables_fixedheader.html" title="FixedHeader" data-filter-tags="datatables datagrid fixedheader" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.datatables_fixedheader">FixedHeader</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/datatables_keytable.html" title="KeyTable" data-filter-tags="datatables datagrid keytable" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.datatables_keytable">KeyTable</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/datatables_responsive.html" title="Responsive" data-filter-tags="datatables datagrid responsive" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.datatables_responsive">Responsive</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/datatables_responsive_alt.html" title="Responsive Alt" data-filter-tags="datatables datagrid responsive alt" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.datatables_responsive_alt">Responsive Alt</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/datatables_rowgroup.html" title="RowGroup" data-filter-tags="datatables datagrid rowgroup" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.datatables_rowgroup">RowGroup</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/datatables_rowreorder.html" title="RowReorder" data-filter-tags="datatables datagrid rowreorder" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.datatables_rowreorder">RowReorder</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/datatables_scroller.html" title="Scroller" data-filter-tags="datatables datagrid scroller" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.datatables_scroller">Scroller</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/datatables_select.html" title="Select" data-filter-tags="datatables datagrid select" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.datatables_select">Select</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/datatables_alteditor.html" title="AltEditor" data-filter-tags="datatables datagrid alteditor" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.datatables_alteditor">AltEditor</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" title="Statistics" data-filter-tags="statistics chart graphs" class=" waves-effect waves-themed">
                                    <i class="fal fa-chart-pie"></i>
                                    <span class="nav-link-text" data-i18n="nav.statistics">Statistics</span>
                                <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                <ul>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/statistics_flot.html" title="Flot" data-filter-tags="statistics chart graphs flot bar pie" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.statistics_flot">Flot</span>
                                            <span class="dl-ref label bg-primary-500 ml-2">36 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/statistics_chartjs.html" title="Chart.js" data-filter-tags="statistics chart graphs chart.js bar pie" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.statistics_chart.js">Chart.js</span>
                                            <span class="dl-ref label bg-primary-500 ml-2">205 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/statistics_chartist.html" title="Chartist.js" data-filter-tags="statistics chart graphs chartist.js" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.statistics_chartist.js">Chartist.js</span>
                                            <span class="dl-ref label bg-primary-600 ml-2">39 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/statistics_c3.html" title="C3 Charts" data-filter-tags="statistics chart graphs c3 charts" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.statistics_c3_charts">C3 Charts</span>
                                            <span class="dl-ref label bg-primary-600 ml-2">197 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/statistics_peity.html" title="Peity" data-filter-tags="statistics chart graphs peity small" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.statistics_peity">Peity</span>
                                            <span class="dl-ref label bg-primary-700 ml-2">4 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/statistics_sparkline.html" title="Sparkline" data-filter-tags="statistics chart graphs sparkline small tiny" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.statistics_sparkline">Sparkline</span>
                                            <span class="dl-ref label bg-primary-700 ml-2">42 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/statistics_easypiechart.html" title="Easy Pie Chart" data-filter-tags="statistics chart graphs easy pie chart" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.statistics_easy_pie_chart">Easy Pie Chart</span>
                                            <span class="dl-ref label bg-primary-700 ml-2">4 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/statistics_dygraph.html" title="Dygraph" data-filter-tags="statistics chart graphs dygraph complex" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.statistics_dygraph">Dygraph</span>
                                            <span class="dl-ref label bg-primary-700 ml-2">120 KB</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" title="Notifications" data-filter-tags="notifications" class=" waves-effect waves-themed">
                                    <i class="fal fa-exclamation-circle"></i>
                                    <span class="nav-link-text" data-i18n="nav.notifications">Notifications</span>
                                <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                <ul>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/notifications_sweetalert2.html" title="SweetAlert2" data-filter-tags="notifications sweetalert2" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.notifications_sweetalert2">SweetAlert2</span>
                                            <span class="dl-ref label bg-primary-500 ml-2">40 KB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/notifications_toastr.html" title="Toastr" data-filter-tags="notifications toastr" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.notifications_toastr">Toastr</span>
                                            <span class="dl-ref label bg-primary-600 ml-2">5 KB</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" title="Form Plugins" data-filter-tags="form plugins" class=" waves-effect waves-themed">
                                    <i class="fal fa-credit-card-front"></i>
                                    <span class="nav-link-text" data-i18n="nav.form_plugins">Form Plugins</span>
                                <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                <ul>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/form_plugins_colorpicker.html" title="Color Picker" data-filter-tags="form plugins color picker" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.form_plugins_color_picker">Color Picker</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/form_plugins_datepicker.html" title="Date Picker" data-filter-tags="form plugins date picker" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.form_plugins_date_picker">Date Picker</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/form_plugins_daterange_picker.html" title="Date Range Picker" data-filter-tags="form plugins date range picker" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.form_plugins_date_range_picker">Date Range Picker</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/form_plugins_dropzone.html" title="Dropzone" data-filter-tags="form plugins dropzone" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.form_plugins_dropzone">Dropzone</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/form_plugins_ionrangeslider.html" title="Ion.RangeSlider" data-filter-tags="form plugins ion.rangeslider" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.form_plugins_ion.rangeslider">Ion.RangeSlider</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/form_plugins_inputmask.html" title="Inputmask" data-filter-tags="form plugins inputmask" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.form_plugins_inputmask">Inputmask</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/form_plugins_imagecropper.html" title="Image Cropper" data-filter-tags="form plugins image cropper" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.form_plugins_image_cropper">Image Cropper</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/form_plugins_select2.html" title="Select2" data-filter-tags="form plugins select2" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.form_plugins_select2">Select2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/form_plugins_summernote.html" title="Summernote" data-filter-tags="form plugins summernote texteditor editor" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.form_plugins_summernote">Summernote</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" title="Miscellaneous" data-filter-tags="miscellaneous" class=" waves-effect waves-themed">
                                    <i class="fal fa-globe"></i>
                                    <span class="nav-link-text" data-i18n="nav.miscellaneous">Miscellaneous</span>
                                <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                <ul>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/miscellaneous_fullcalendar.html" title="FullCalendar" data-filter-tags="miscellaneous fullcalendar" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.miscellaneous_fullcalendar">FullCalendar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/miscellaneous_lightgallery.html" title="Light Gallery" data-filter-tags="miscellaneous light gallery" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.miscellaneous_light_gallery">Light Gallery</span>
                                            <span class="dl-ref label bg-primary-500 ml-2">61 KB</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-title">Layouts &amp; Apps</li>
                            <li class="active open">
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" title="Pages" data-filter-tags="pages" aria-expanded="true" class=" waves-effect waves-themed">
                                    <i class="fal fa-plus-circle"></i>
                                    <span class="nav-link-text" data-i18n="nav.pages">Page Views</span>
                                <b class="collapse-sign"><em class="fal fa-angle-up"></em></b></a>
                                <ul>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_chat.html" title="Chat" data-filter-tags="pages chat" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.pages_chat">Chat</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_contacts.html" title="Contacts" data-filter-tags="pages contacts" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.pages_contacts">Contacts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="Forum" data-filter-tags="pages forum" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.pages_forum">Forum</span>
                                        <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                        <ul>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_forum_list.html" title="List" data-filter-tags="pages forum list" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.pages_forum_list">List</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_forum_threads.html" title="Threads" data-filter-tags="pages forum threads" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.pages_forum_threads">Threads</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_forum_discussion.html" title="Discussion" data-filter-tags="pages forum discussion" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.pages_forum_discussion">Discussion</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="Inbox" data-filter-tags="pages inbox" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.pages_inbox">Inbox</span>
                                        <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                        <ul>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_inbox_general.html" title="General" data-filter-tags="pages inbox general" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.pages_inbox_general">General</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_inbox_read.html" title="Read" data-filter-tags="pages inbox read" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.pages_inbox_read">Read</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_inbox_write.html" title="Write" data-filter-tags="pages inbox write" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.pages_inbox_write">Write</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="active">
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_invoice.html" title="Invoice (printable)" data-filter-tags="pages invoice (printable)" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.pages_invoice_(printable)">Invoice (printable)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="Authentication" data-filter-tags="pages authentication" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.pages_authentication">Authentication</span>
                                        <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                        <ul>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_forget.html" title="Forget Password" data-filter-tags="pages authentication forget password" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.pages_authentication_forget_password">Forget Password</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_locked.html" title="Locked Screen" data-filter-tags="pages authentication locked screen" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.pages_authentication_locked_screen">Locked Screen</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_login.html" title="Login" data-filter-tags="pages authentication login" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.pages_authentication_login">Login</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_login_alt.html" title="Login Alt" data-filter-tags="pages authentication login alt" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.pages_authentication_login_alt">Login Alt</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_register.html" title="Register" data-filter-tags="pages authentication register" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.pages_authentication_register">Register</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_confirmation.html" title="Confirmation" data-filter-tags="pages authentication confirmation" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.pages_authentication_confirmation">Confirmation</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="Error Pages" data-filter-tags="pages error pages" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.pages_error_pages">Error Pages</span>
                                        <b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a>
                                        <ul>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_error.html" title="General Error" data-filter-tags="pages error pages general error" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.pages_error_pages_general_error">General Error</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_error_404.html" title="Server Error" data-filter-tags="pages error pages server error" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.pages_error_pages_server_error">Server Error</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_error_announced.html" title="Announced Error" data-filter-tags="pages error pages announced error" class=" waves-effect waves-themed">
                                                    <span class="nav-link-text" data-i18n="nav.pages_error_pages_announced_error">Announced Error</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_profile.html" title="Profile" data-filter-tags="pages profile" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.pages_profile">Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_projects.html" title="Projects" data-filter-tags="pages projects" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.pages_projects">Projects</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_search.html" title="Search Results" data-filter-tags="pages search results" class=" waves-effect waves-themed">
                                            <span class="nav-link-text" data-i18n="nav.pages_search_results">Search Results</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="filter-message js-filter-message bg-success-600"></div>
                    </nav>
                    <!-- END PRIMARY NAVIGATION -->
                    <!-- NAV FOOTER -->
                    <div class="nav-footer shadow-top">
                        <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" onclick="return false;" data-action="toggle" data-class="nav-function-minify" class="hidden-md-down">
                            <i class="ni ni-chevron-right"></i>
                            <i class="ni ni-chevron-right"></i>
                        </a>
                        <ul class="list-table m-auto nav-footer-buttons">
                            <li>
                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat logs">
                                    <i class="fal fa-comments"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Support Chat">
                                    <i class="fal fa-life-ring"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Make a call">
                                    <i class="fal fa-phone"></i>
                                </a>
                            </li>
                        </ul>
                    </div> <!-- END NAV FOOTER -->
                </aside>
                <!-- END Left Aside -->
                <div class="page-content-wrapper">
                    <!-- BEGIN Page Header -->
                    <header class="page-header" role="banner">
                        <!-- we need this logo when user switches to nav-function-top -->
                        <div class="page-logo">
                            <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                                <img src="./Invoice - Page Views - SmartAdmin v4.5.1_files/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                                <span class="page-logo-text mr-1">SmartAdmin WebApp</span>
                                <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                                <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                            </a>
                        </div>
                        <!-- DOC: nav menu layout change shortcut -->
                        <div class="hidden-md-down dropdown-icon-menu position-relative">
                            <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
                                <i class="ni ni-menu"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify" title="Minify Navigation">
                                        <i class="ni ni-minify-nav"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed" title="Lock Navigation">
                                        <i class="ni ni-lock-nav"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- DOC: mobile button appears during mobile width -->
                        <div class="hidden-lg-up">
                            <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="header-btn btn press-scale-down waves-effect waves-themed" data-action="toggle" data-class="mobile-nav-on">
                                <i class="ni ni-menu"></i>
                            </a>
                        </div>
                        <div class="search">
                            <form class="app-forms hidden-xs-down" role="search" action="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_search.html" autocomplete="off">
                                <input type="text" id="search-field" placeholder="Search for anything" class="form-control" tabindex="1">
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" onclick="return false;" class="btn-danger btn-search-close js-waves-off d-none" data-action="toggle" data-class="mobile-search-on">
                                    <i class="fal fa-times"></i>
                                </a>
                            </form>
                        </div>
                        <div class="ml-auto d-flex">
                            <!-- activate app search icon (mobile) -->
                            <div class="hidden-sm-up">
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="header-icon" data-action="toggle" data-class="mobile-search-on" data-focus="search-field" title="Search">
                                    <i class="fal fa-search"></i>
                                </a>
                            </div>
                            <!-- app settings -->
                            <div class="hidden-md-down">
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
                                    <i class="fal fa-cog"></i>
                                </a>
                            </div>
                            <!-- app shortcuts -->
                            <div>
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="header-icon" data-toggle="dropdown" title="My Apps">
                                    <i class="fal fa-cube"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated w-auto h-auto">
                                    <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top">
                                        <h4 class="m-0 text-center color-white">
                                            Quick Shortcut
                                            <small class="mb-0 opacity-80">User Applications &amp; Addons</small>
                                        </h4>
                                    </div>
                                    <div class="custom-scroll h-100">
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><ul class="app-list" style="overflow: hidden; width: auto; height: 100%;">
                                            <li>
                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-2 icon-stack-3x color-primary-600"></i>
                                                        <i class="base-3 icon-stack-2x color-primary-700"></i>
                                                        <i class="ni ni-settings icon-stack-1x text-white fs-lg"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Services
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-2 icon-stack-3x color-primary-400"></i>
                                                        <i class="base-10 text-white icon-stack-1x"></i>
                                                        <i class="ni md-profile color-primary-800 icon-stack-2x"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Account
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-9 icon-stack-3x color-success-400"></i>
                                                        <i class="base-2 icon-stack-2x color-success-500"></i>
                                                        <i class="ni ni-shield icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Security
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-18 icon-stack-3x color-info-700"></i>
                                                        <span class="position-absolute pos-top pos-left pos-right color-white fs-md mt-2 fw-400">28</span>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Calendar
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-7 icon-stack-3x color-info-500"></i>
                                                        <i class="base-7 icon-stack-2x color-info-700"></i>
                                                        <i class="ni ni-graph icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Stats
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-4 icon-stack-3x color-danger-500"></i>
                                                        <i class="base-4 icon-stack-1x color-danger-400"></i>
                                                        <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Messages
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-4 icon-stack-3x color-fusion-400"></i>
                                                        <i class="base-5 icon-stack-2x color-fusion-200"></i>
                                                        <i class="base-5 icon-stack-1x color-fusion-100"></i>
                                                        <i class="fal fa-keyboard icon-stack-1x color-info-50"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Notes
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-16 icon-stack-3x color-fusion-500"></i>
                                                        <i class="base-10 icon-stack-1x color-primary-50 opacity-30"></i>
                                                        <i class="base-10 icon-stack-1x fs-xl color-primary-50 opacity-20"></i>
                                                        <i class="fal fa-dot-circle icon-stack-1x text-white opacity-85"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Photos
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-19 icon-stack-3x color-primary-400"></i>
                                                        <i class="base-7 icon-stack-2x color-primary-300"></i>
                                                        <i class="base-7 icon-stack-1x fs-xxl color-primary-200"></i>
                                                        <i class="base-7 icon-stack-1x color-primary-500"></i>
                                                        <i class="fal fa-globe icon-stack-1x text-white opacity-85"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Maps
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-5 icon-stack-3x color-success-700 opacity-80"></i>
                                                        <i class="base-12 icon-stack-2x color-success-700 opacity-30"></i>
                                                        <i class="fal fa-comment-alt icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Chat
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-5 icon-stack-3x color-warning-600"></i>
                                                        <i class="base-7 icon-stack-2x color-warning-800 opacity-50"></i>
                                                        <i class="fal fa-phone icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Phone
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="app-list-item hover-white">
                                                    <span class="icon-stack">
                                                        <i class="base-6 icon-stack-3x color-danger-600"></i>
                                                        <i class="fal fa-chart-line icon-stack-1x text-white"></i>
                                                    </span>
                                                    <span class="app-list-name">
                                                        Projects
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="w-100">
                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="btn btn-default mt-4 mb-2 pr-5 pl-5 waves-effect waves-themed"> Add more apps </a>
                                            </li>
                                        </ul><div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.6); width: 4px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 4px; height: 237.798px;"></div><div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(250, 250, 250); opacity: 0.2; z-index: 90; right: 4px;"></div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- app message -->
                            <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="header-icon" data-toggle="modal" data-target=".js-modal-messenger">
                                <i class="fal fa-globe"></i>
                                <span class="badge badge-icon">!</span>
                            </a>
                            <!-- app notification -->
                            <div>
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="header-icon" data-toggle="dropdown" title="You got 11 notifications">
                                    <i class="fal fa-bell"></i>
                                    <span class="badge badge-icon">11</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-xl">
                                    <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top mb-2">
                                        <h4 class="m-0 text-center color-white">
                                            11 New
                                            <small class="mb-0 opacity-80">User Notifications</small>
                                        </h4>
                                    </div>
                                    <ul class="nav nav-tabs nav-tabs-clean" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link px-4 fs-md js-waves-on fw-500 waves-effect waves-themed" data-toggle="tab" href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_invoice.html#tab-messages" data-i18n="drpdwn.messages">Messages</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-4 fs-md js-waves-on fw-500 waves-effect waves-themed" data-toggle="tab" href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_invoice.html#tab-feeds" data-i18n="drpdwn.feeds">Feeds</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-4 fs-md js-waves-on fw-500 waves-effect waves-themed" data-toggle="tab" href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_invoice.html#tab-events" data-i18n="drpdwn.events">Events</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tab-notification">
                                        <div class="tab-pane active p-3 text-center">
                                            <h5 class="mt-4 pt-4 fw-500">
                                                <span class="d-block fa-3x pb-4 text-muted">
                                                    <i class="ni ni-arrow-up text-gradient opacity-70"></i>
                                                </span> Select a tab above to activate
                                                <small class="mt-3 fs-b fw-400 text-muted">
                                                    This blank page message helps protect your privacy, or you can show the first message here automatically through
                                                    <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html">settings page</a>
                                                </small>
                                            </h5>
                                        </div>
                                        <div class="tab-pane" id="tab-messages" role="tabpanel">
                                            <div class="custom-scroll h-100">
                                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><ul class="notification" style="overflow: hidden; width: auto; height: 100%;">
                                                    <li class="unread">
                                                        <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="d-flex align-items-center">
                                                            <span class="status mr-2">
                                                                <span class="profile-image rounded-circle d-inline-block" style="background-image:url(&#39;img/demo/avatars/avatar-c.png&#39;)"></span>
                                                            </span>
                                                            <span class="d-flex flex-column flex-1 ml-1">
                                                                <span class="name">Melissa Ayre <span class="badge badge-primary fw-n position-absolute pos-top pos-right mt-1">INBOX</span></span>
                                                                <span class="msg-a fs-sm">Re: New security codes</span>
                                                                <span class="msg-b fs-xs">Hello again and thanks for being part...</span>
                                                                <span class="fs-nano text-muted mt-1">56 seconds ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="unread">
                                                        <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="d-flex align-items-center">
                                                            <span class="status mr-2">
                                                                <span class="profile-image rounded-circle d-inline-block" style="background-image:url(&#39;img/demo/avatars/avatar-a.png&#39;)"></span>
                                                            </span>
                                                            <span class="d-flex flex-column flex-1 ml-1">
                                                                <span class="name">Adison Lee</span>
                                                                <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                                <span class="fs-nano text-muted mt-1">2 minutes ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="d-flex align-items-center">
                                                            <span class="status status-success mr-2">
                                                                <span class="profile-image rounded-circle d-inline-block" style="background-image:url(&#39;img/demo/avatars/avatar-b.png&#39;)"></span>
                                                            </span>
                                                            <span class="d-flex flex-column flex-1 ml-1">
                                                                <span class="name">Oliver Kopyuv</span>
                                                                <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                                <span class="fs-nano text-muted mt-1">3 days ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="d-flex align-items-center">
                                                            <span class="status status-warning mr-2">
                                                                <span class="profile-image rounded-circle d-inline-block" style="background-image:url(&#39;img/demo/avatars/avatar-e.png&#39;)"></span>
                                                            </span>
                                                            <span class="d-flex flex-column flex-1 ml-1">
                                                                <span class="name">Dr. John Cook PhD</span>
                                                                <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                                <span class="fs-nano text-muted mt-1">2 weeks ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="d-flex align-items-center">
                                                            <span class="status status-success mr-2">
                                                                <!-- <img src="img/demo/avatars/avatar-m.png" data-src="img/demo/avatars/avatar-h.png" class="profile-image rounded-circle" alt="Sarah McBrook" /> -->
                                                                <span class="profile-image rounded-circle d-inline-block" style="background-image:url(&#39;img/demo/avatars/avatar-h.png&#39;)"></span>
                                                            </span>
                                                            <span class="d-flex flex-column flex-1 ml-1">
                                                                <span class="name">Sarah McBrook</span>
                                                                <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                                <span class="fs-nano text-muted mt-1">3 weeks ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="d-flex align-items-center">
                                                            <span class="status status-success mr-2">
                                                                <span class="profile-image rounded-circle d-inline-block" style="background-image:url(&#39;img/demo/avatars/avatar-m.png&#39;)"></span>
                                                            </span>
                                                            <span class="d-flex flex-column flex-1 ml-1">
                                                                <span class="name">Anothony Bezyeth</span>
                                                                <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                                <span class="fs-nano text-muted mt-1">one month ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="d-flex align-items-center">
                                                            <span class="status status-danger mr-2">
                                                                <span class="profile-image rounded-circle d-inline-block" style="background-image:url(&#39;img/demo/avatars/avatar-j.png&#39;)"></span>
                                                            </span>
                                                            <span class="d-flex flex-column flex-1 ml-1">
                                                                <span class="name">Lisa Hatchensen</span>
                                                                <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                                                <span class="fs-nano text-muted mt-1">one year ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul><div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.6); width: 4px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 4px;"></div><div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(250, 250, 250); opacity: 0.2; z-index: 90; right: 4px;"></div></div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab-feeds" role="tabpanel">
                                            <div class="custom-scroll h-100">
                                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><ul class="notification" style="overflow: hidden; width: auto; height: 100%;">
                                                    <li class="unread">
                                                        <div class="d-flex align-items-center show-child-on-hover">
                                                            <span class="d-flex flex-column flex-1">
                                                                <span class="name d-flex align-items-center">Administrator <span class="badge badge-success fw-n ml-1">UPDATE</span></span>
                                                                <span class="msg-a fs-sm">
                                                                    System updated to version <strong>4.5.1</strong> <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/docs_buildnotes.html">(patch notes)</a>
                                                                </span>
                                                                <span class="fs-nano text-muted mt-1">5 mins ago</span>
                                                            </span>
                                                            <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center show-child-on-hover">
                                                            <div class="d-flex flex-column flex-1">
                                                                <span class="name">
                                                                    Adison Lee <span class="fw-300 d-inline">replied to your video <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="fw-400"> Cancer Drug</a> </span>
                                                                </span>
                                                                <span class="msg-a fs-sm mt-2">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day...</span>
                                                                <span class="fs-nano text-muted mt-1">10 minutes ago</span>
                                                            </div>
                                                            <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center show-child-on-hover">
                                                            <!--<img src="img/demo/avatars/avatar-m.png" data-src="img/demo/avatars/avatar-k.png" class="profile-image rounded-circle" alt="k" />-->
                                                            <div class="d-flex flex-column flex-1">
                                                                <span class="name">
                                                                    Troy Norman'<span class="fw-300">s new connections</span>
                                                                </span>
                                                                <div class="fs-sm d-flex align-items-center mt-2">
                                                                    <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url(&#39;img/demo/avatars/avatar-a.png&#39;); background-size: cover;"></span>
                                                                    <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url(&#39;img/demo/avatars/avatar-b.png&#39;); background-size: cover;"></span>
                                                                    <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url(&#39;img/demo/avatars/avatar-c.png&#39;); background-size: cover;"></span>
                                                                    <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url(&#39;img/demo/avatars/avatar-e.png&#39;); background-size: cover;"></span>
                                                                    <div data-hasmore="+3" class="rounded-circle profile-image-md mr-1">
                                                                        <span class="profile-image-md mr-1 rounded-circle d-inline-block" style="background-image:url(&#39;img/demo/avatars/avatar-h.png&#39;); background-size: cover;"></span>
                                                                    </div>
                                                                </div>
                                                                <span class="fs-nano text-muted mt-1">55 minutes ago</span>
                                                            </div>
                                                            <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center show-child-on-hover">
                                                            <!--<img src="img/demo/avatars/avatar-m.png" data-src="img/demo/avatars/avatar-e.png" class="profile-image-sm rounded-circle align-self-start mt-1" alt="k" />-->
                                                            <div class="d-flex flex-column flex-1">
                                                                <span class="name">Dr John Cook <span class="fw-300">sent a <span class="text-danger">new signal</span></span></span>
                                                                <span class="msg-a fs-sm mt-2">Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</span>
                                                                <span class="fs-nano text-muted mt-1">10 minutes ago</span>
                                                            </div>
                                                            <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center show-child-on-hover">
                                                            <div class="d-flex flex-column flex-1">
                                                                <span class="name">Lab Images <span class="fw-300">were updated!</span></span>
                                                                <div class="fs-sm d-flex align-items-center mt-1">
                                                                    <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="mr-1 mt-1" title="Cell A-0012">
                                                                        <span class="d-block img-share" style="background-image:url(&#39;img/thumbs/pic-7.png&#39;); background-size: cover;"></span>
                                                                    </a>
                                                                    <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="mr-1 mt-1" title="Patient A-473 saliva">
                                                                        <span class="d-block img-share" style="background-image:url(&#39;img/thumbs/pic-8.png&#39;); background-size: cover;"></span>
                                                                    </a>
                                                                    <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="mr-1 mt-1" title="Patient A-473 blood cells">
                                                                        <span class="d-block img-share" style="background-image:url(&#39;img/thumbs/pic-11.png&#39;); background-size: cover;"></span>
                                                                    </a>
                                                                    <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="mr-1 mt-1" title="Patient A-473 Membrane O.C">
                                                                        <span class="d-block img-share" style="background-image:url(&#39;img/thumbs/pic-12.png&#39;); background-size: cover;"></span>
                                                                    </a>
                                                                </div>
                                                                <span class="fs-nano text-muted mt-1">55 minutes ago</span>
                                                            </div>
                                                            <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center show-child-on-hover">
                                                            <!--<img src="img/demo/avatars/avatar-m.png" data-src="img/demo/avatars/avatar-h.png" class="profile-image rounded-circle align-self-start mt-1" alt="k" />-->
                                                            <div class="d-flex flex-column flex-1">
                                                                <div class="name mb-2">
                                                                    Lisa Lamar<span class="fw-300"> updated project</span>
                                                                </div>
                                                                <div class="row fs-b fw-300">
                                                                    <div class="col text-left">
                                                                        Progress
                                                                    </div>
                                                                    <div class="col text-right fw-500">
                                                                        45%
                                                                    </div>
                                                                </div>
                                                                <div class="progress progress-sm d-flex mt-1">
                                                                    <span class="progress-bar bg-primary-500 progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></span>
                                                                </div>
                                                                <span class="fs-nano text-muted mt-1">2 hrs ago</span>
                                                                <div class="show-on-hover-parent position-absolute pos-right pos-bottom p-3">
                                                                    <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="text-muted" title="delete"><i class="fal fa-trash-alt"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul><div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.6); width: 4px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 4px;"></div><div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(250, 250, 250); opacity: 0.2; z-index: 90; right: 4px;"></div></div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab-events" role="tabpanel">
                                            <div class="d-flex flex-column h-100">
                                                <div class="h-auto">
                                                    <table class="table table-bordered table-calendar m-0 w-100 h-100 border-0">
                                                        <tbody><tr>
                                                            <th colspan="7" class="pt-3 pb-2 pl-3 pr-3 text-center">
                                                                <div class="js-get-date h5 mb-2">Saturday, July 24, 2021</div>
                                                            </th>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <th>Sun</th>
                                                            <th>Mon</th>
                                                            <th>Tue</th>
                                                            <th>Wed</th>
                                                            <th>Thu</th>
                                                            <th>Fri</th>
                                                            <th>Sat</th>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted bg-faded">30</td>
                                                            <td>1</td>
                                                            <td>2</td>
                                                            <td>3</td>
                                                            <td>4</td>
                                                            <td>5</td>
                                                            <td><i class="fal fa-birthday-cake mt-1 ml-1 position-absolute pos-left pos-top text-primary"></i> 6</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>8</td>
                                                            <td>9</td>
                                                            <td class="bg-primary-300 pattern-0">10</td>
                                                            <td>11</td>
                                                            <td>12</td>
                                                            <td>13</td>
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td>15</td>
                                                            <td>16</td>
                                                            <td>17</td>
                                                            <td>18</td>
                                                            <td>19</td>
                                                            <td>20</td>
                                                        </tr>
                                                        <tr>
                                                            <td>21</td>
                                                            <td>22</td>
                                                            <td>23</td>
                                                            <td>24</td>
                                                            <td>25</td>
                                                            <td>26</td>
                                                            <td>27</td>
                                                        </tr>
                                                        <tr>
                                                            <td>28</td>
                                                            <td>29</td>
                                                            <td>30</td>
                                                            <td>31</td>
                                                            <td class="text-muted bg-faded">1</td>
                                                            <td class="text-muted bg-faded">2</td>
                                                            <td class="text-muted bg-faded">3</td>
                                                        </tr>
                                                    </tbody></table>
                                                </div>
                                                <div class="flex-1 custom-scroll">
                                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="p-2" style="overflow: hidden; width: auto; height: 100%;">
                                                        <div class="d-flex align-items-center text-left mb-3">
                                                            <div class="width-5 fw-300 text-primary l-h-n mr-1 align-self-start fs-xxl">
                                                                15
                                                            </div>
                                                            <div class="flex-1">
                                                                <div class="d-flex flex-column">
                                                                    <span class="l-h-n fs-md fw-500 opacity-70">
                                                                        October 2020
                                                                    </span>
                                                                    <span class="l-h-n fs-nano fw-400 text-secondary">
                                                                        Friday
                                                                    </span>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <p>
                                                                        <strong>2:30PM</strong> - Doctor's appointment
                                                                    </p>
                                                                    <p>
                                                                        <strong>3:30PM</strong> - Report overview
                                                                    </p>
                                                                    <p>
                                                                        <strong>4:30PM</strong> - Meeting with Donnah V.
                                                                    </p>
                                                                    <p>
                                                                        <strong>5:30PM</strong> - Late Lunch
                                                                    </p>
                                                                    <p>
                                                                        <strong>6:30PM</strong> - Report Compression
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.6); width: 4px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 4px;"></div><div class="slimScrollRail" style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(250, 250, 250); opacity: 0.2; z-index: 90; right: 4px;"></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-3 bg-faded d-block rounded-bottom text-right border-faded border-bottom-0 border-right-0 border-left-0">
                                        <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="fs-xs fw-500 ml-auto">view all notifications</a>
                                    </div>
                                </div>
                            </div>
                            <!-- app user menu -->
                            <div>
                                <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" data-toggle="dropdown" title="drlantern@gotbootstrap.com" class="header-icon d-flex align-items-center justify-content-center ml-2">
                                    <img src="./Invoice - Page Views - SmartAdmin v4.5.1_files/avatar-admin.png" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
                                    <!-- you can also add username next to the avatar with the codes below:
									<span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
									<i class="ni ni-chevron-down hidden-xs-down"></i> -->
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                                    <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                                        <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                            <span class="mr-2">
                                                <img src="./Invoice - Page Views - SmartAdmin v4.5.1_files/avatar-admin.png" class="rounded-circle profile-image" alt="Dr. Codex Lantern">
                                            </span>
                                            <div class="info-card-text">
                                                <div class="fs-lg text-truncate text-truncate-lg">Dr. Codex Lantern</div>
                                                <span class="text-truncate text-truncate-md opacity-80">drlantern@gotbootstrap.com</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="dropdown-item" data-action="app-reset">
                                        <span data-i18n="drpdwn.reset_layout">Reset Layout</span>
                                    </a>
                                    <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="dropdown-item" data-toggle="modal" data-target=".js-modal-settings">
                                        <span data-i18n="drpdwn.settings">Settings</span>
                                    </a>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="dropdown-item" data-action="app-fullscreen">
                                        <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
                                        <i class="float-right text-muted fw-n">F11</i>
                                    </a>
                                    <a href="./Invoice - Page Views - SmartAdmin v4.5.1_files/page_invoice.html" class="dropdown-item" data-action="app-print">
                                        <span data-i18n="drpdwn.print">Print</span>
                                        <i class="float-right text-muted fw-n">Ctrl + P</i>
                                    </a>
                                    <div class="dropdown-multilevel dropdown-multilevel-left">
                                        <div class="dropdown-item">
                                            Language
                                        </div>
                                        <div class="dropdown-menu">
                                            <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_invoice.html#?lang=fr" class="dropdown-item" data-action="lang" data-lang="fr">Fran??ais</a>
                                            <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_invoice.html#?lang=en" class="dropdown-item active" data-action="lang" data-lang="en">English (US)</a>
                                            <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_invoice.html#?lang=es" class="dropdown-item" data-action="lang" data-lang="es">Espa??ol</a>
                                            <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_invoice.html#?lang=ru" class="dropdown-item" data-action="lang" data-lang="ru">?????????????? ????????</a>
                                            <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_invoice.html#?lang=jp" class="dropdown-item" data-action="lang" data-lang="jp">?????????</a>
                                            <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_invoice.html#?lang=ch" class="dropdown-item" data-action="lang" data-lang="ch">??????</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item fw-500 pt-3 pb-3" href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_login.html">
                                        <span data-i18n="drpdwn.page-logout">Logout</span>
                                        <span class="float-right fw-n">@codexlantern</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- END Page Header -->
                    <!-- BEGIN Page Content -->
                    <!-- the #js-page-content id is needed for some plugins to initialize -->
                    <main id="js-page-content" role="main" class="page-content">
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
                            <li class="breadcrumb-item">Page Views</li>
                            <li class="breadcrumb-item active">Invoice</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date">Saturday, July 24, 2021</span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class="subheader-icon fal fa-plus-circle"></i> Invoice
                                <small>
                                    Printable Invoice Page
                                </small>
                            </h1>
                        </div>
                        <div class="container">
                            <div data-size="A4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="d-flex align-items-center mb-5">
                                            <h2 class="keep-print-font fw-500 mb-0 text-primary flex-1 position-relative">
                                                SmartAdmin WebApp
                                                <small class="text-muted mb-0 fs-xs">
                                                    227 Cobblestone Road 30000 Bedrock, Cobblestone County
                                                </small>
                                                <!-- barcode demo only -->
                                                <img id="barcode" alt="" class="position-absolute pos-top pos-right height-3 mt-1 hidden-md-down" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdAAAABkCAYAAAA2cWHXAAAVyUlEQVR4Xu2d25XjyBFEtUbJiXVCtskJOSGjRofD5lkCi+S9UYVu/cT+7TRIFKIy45EAyT9+/fr16x/iv3/++a/DUf/9z79////r31///zpo+vfzqdLjXq+n86XrPa/7vE57vROUdr3n89jrnc6b7s8ZN8LhvD7CnfA5r9euh+ourbPdfSDcUxxof6d9SOuO+iCtR7t/hNd0HbSetH4JZ8sDu/VjefIufC2Ou9c18QP171SX57qg+p32j9Y11cUfFdAjNFNB2sYhYpwKhYSDiNA2PhVq2pAV0KextPuT4jsRBBGKFSQ6brWeichWBZ+um85rBYAEjHCz51k1dnSdKb4V0OuAONX/698roCeEKqDHQkodfBPoEzEiWBKmlFhTwvxuQ3g3wTeBfjZqq/VEycv286qBtK+zxonqrgn0CyECnjb+ruhPG0bObnVDU4IlvNLrIHwpmZIwTw5+et15/fZ6bdKw+2jXsUp403oroM9bSlTHNhnauqA6swJlJw1kJGxfWUFK+zytf8LP1jsdR/1B+zT1axPoCZkm0CbQR0lYoqWkeTfhEVHYZGmPI6FPCXOV4AlH+jsZulTA7L4TMd9lhGmfaL1kEFP8ds9nA449rgI6PMQ0NTA5p7uAJ8dLhdkE+kTI4jARsCXyVaK0+2jXsUp4FdAnAlaYSLCnfZ1wtsZj14DR+VPe2RW0Cuh1xzaBnnBpAm0CvRL0CuixUezobfehqbuIPxUAEjBaVwXU3bO1dTQZhruCEBmyyfBWQCugBwRSwrPElL5v74FeE1ATaBPoew2s9pUVJJrkrRrL9HV2vZTM7aSLJlWv81RAK6AV0DcEzsmCnKlNItTYkxGhRiaCI4dP65+cN73vXddr19d7oNc7ZUfOJGjWKJ/3nfbF1lEFdOjE9CY6bTSNTuh8HeF2hPuoMaojSxREIOe2IMJrAm0CbQL9C4GOcL8eDlp12hORpc6cHDMRmx2l0Hp3iXsiWOv07HUQvuRYrXDY9awKGuHVBPo52VjcKclS0iQjQn+nerT8Y3ngp/t4F18KJil+tJ90PiuM9rhp/XafJnw7wj0h0wTaBNoE+venXCfDUwG9/vypJWaaiP0UviRoFdBrCa2AVkAPCNjE1wR6HCV+V8K3yYgctp180CSGiNYmwdX1Tuuz57XCZicTtO+rEww6f7pPu4mwAloB/Y0AOb4m0CbQJtAmUBIwEiQr1MRHTaDHnSBDQsZiGsHb9z3XRRNoE2gT6BsCfQr3mKyvfffPfXk+CRUl4vP6rbBVQK/rwOK3u2/23qY9jiYeFdDTw0g0YrwLeHI81OCrjugu52pHX3aEQ7gTIZOATYRonbodid5FFLv42vUSQUz4WKLbxT3dd7uf1F8VUPezkxbHu/qCzmf52R5H/VEBrYBechQR5C7BrworEdvUqLtEbgXpLqLYxdeulwiiAvpEwO5rE2gT6GT63v+9I9wTSr0H2nugCdF+t0GpgO59JRwZtSkJVUAroBXQNwSmUenUKNR4q8nCJgEaKXSEe0wUduRnBckmlQrokWhX+2IXR3teu68V0ApoBbQCij/sbIlndVSbjmJ7D/TzPSsyfGQUJ3xX68Aal4mM0vWezzclSDtJagI9TpyoDqwBIUNE+2bvbdrjJv6y1zPVb0e4HeEeEOjnQI8jw9VJgCWQdNJRAf2cjCaBtQZwIsrUeFhivmuStGtQSNBS/Gz9T4JthdEeVwHt74FeCl06krw7MdjGSoU5Ta72ulK8KqDX1GyJb3Xf7X5a4rd1WgG9/malFL8KKCSz1dHL5KAtsVHDkPMjx2dHPzTqmJLFRAw0urSEZfG1BU4JyTbWKpHa11nCtXVGdbR6Pns9VKdT0kr7crcOLA67CYn6jf5u67QCWgF91ADxxKtOOsIFo0DRfyKyCugTgTRJkpFIcSWCJ8PRBHotKdbQ7RoGK/AV0M/7dBeOdxlLG4Sm/pxeT3w8GUzq88lYVUAroAcEUsKzzj5931R4SSjTRHcXUVhit0bNEgoRpk2qlBwt7vQ+dr0TQVqc7b5aY0VGgoh5tS5JKGw92fXZPk/rgfCz9U7HER6EQwX0P+7pxo5w+znQT8nZNjwJwqqgEFFYYbTH0TpTwjy/n10HCST9PRWACugTgUlYSHBs/dt+ssaJjEUT6BdCBDxt/DTjroBWQCug/TL5CmgFdDKP7//eEe4JpQpoBbQCWgGtgFZAK6BvCNCoaDX60+vOo6Np5EUPz1DinjabRil29GVHYJT8aSRIOEwjQDtKpKfr6Px2Hwj3FAfa32l/aL2767S4r16vXZ+t494DdU/Z0si0I9wnQk2gTaAHBNKHfVaFdRJCErAK6BEBMiwV0CNeFdAK6KMiiGfIaL+qqgJaAa2AviGQNhYlJJuMbII8G4gK6BMRi3MFtAJaAf3QMNQg9Nh474H2Hug7Ie+OqiyxV0A//+oK4Uh/t5MSGpXTraC7DNhklOx12nqy9Z3iR8by/H50K4BGymQsCQ/CYaqLJtAm0CbQJlCd4FLiS28J0MjZEqk1wtP1kICRQJCRt4JBx92FL+1rBfRaQiugFdAKaAW0Avr1OfEmUDfipcRGBoME237M0B7XBNovk78UOrrZTYW8OxKyznTVKdvXWaee4rVLFLv42vUSQUz4UH1MgrKaFM/vl45Em0A/C9wqviRots9tH9L5rDDa46g/qM+nPmgCbQJtAm0CbQJtAv3dBWT4dkfTJFTpMyoV0K9kueq0yVmT8zg7C3vvhAptcoK03t0Cna7nuxKDdaY2SdJDGCmu5IgJr9WG3012RCSUxOj8Nvk1gT4RmOqS+mq1fqgup/1vAj3ul8WD9qkJtN+Fe5k0V40AfXyChHW1sCugRwRoHyzBr9YBGZRV45S+r12/NagkYKlBOfcDXR+dvwL6RKAJtAn0o8P97sazxEOCSMS0SqT2dURIaaKj61k9n72edL3T/lRAj1Jk95UErAJ6/Lgb1dkk+PZ19vVkLKbJSxPoSYhTZ74KPL3OCiCNLtNC+ymCXxXWJtAzAkdHXQF94kFCRf1FdTa9vgJ6xN/2ueUd2jebLO1xZDAroBXQS0YmAmoCPcJ2l5Eh3K/l8+8/QL76bACdv/dAPyeoCmgFdOrR93/vU7gnlPoQUb+J6FESdtRnhSqdVDSBNoG+UxPV2aoho+RFk7w0Sdrz2WRpj2sC7edADz2SEqwdAaf36OxoJ33fScCmkZwdHdlEVwF1RsrivkvwNCmhv9s6ndY5TSaor3YF46fwJSFM8bOCT/hNk4BpvWRUew/0CyECnpzTXc6FNowKc3VDK6BPZKkOiICmBq2AVkA/JUASiN36obpMeYfWSzxVAb22Vh3hnnDpCNcRJxkUargpSdI9yCbQIwK0D2QwLLHu4t4Emhm+CujxG5cmw3BXEKJJwVS/FdAK6AGBdNRKQpmOYiugT+JIJwzTPlRAjw1ukyEJGBkPe550n+2oOq2HJtDsobIXXhXQCmgF9A0BEnASpLNTvpvwJmJPCbNP4WaE2XugxwRNiY0MBgm2TZb2OOoPup4m0H4T0aVQ7hJ8E+je71jaUfbUwB3hfh6NEr4TkTeBPhGg+kqFkISKEjm9/mxgaf/tpKACWgGtgH746q8pOVLDktPeNSj2qWFy2HR9q+v87sRN+BKBE4FWQN03ClmjnNaDnehMwtgE2q/yOzg964jIqdlCXiXO1Jmm91bTe6er12uTBhG1JYJVHJpA3e9UpgmkAloB/ZS0p757/XvvgZ4Q6lO4fQr3URK7RsYmJ0pITaCfR+RkbAjfCmgFtAL64eeG7Ggrda6ryc2O0lZHh5SobFKbnBcJi02mRGxNoNfCMe2vrfP0YRiqg7vraTXJ236k+qWkbx++sue5a5JE+2QNHeG4e127vEavX+Vx+75nnJtAm0APCKQjxom46d8roNeURwRdAX0iQIRnJ0lNoE2gpp4mg1IBrYBWQN8Q6MdYrgVqMjxNoNf3ZneTWjpJagI9ImANlN2nCmifwr0UShrZUFKkpJmOYknAdonc3lO0jUWjsV187XqnfaCRKK2fiLkCWgF91ADV2blOpuRPI22aPEznof6w73vuhybQJtAm0CbQkQAroMdETiN2MoBWaJpA+1V+v2vAOmh7nHUu9DDLXZ8fIseTrnc3+aSNt5uQmkD7RQqPGthNsvR6qlP6u63TyTCkD1/9dB+T0SF8iadS/HbPZ/nZHtcE2p8zu0yK1nhY59uHiI6CSKMdIgpL7NTgROz29akQEDF3hNsRbke4U5dcjLZWG5UIwAoBOSVyfumMPb3eVcL5f41+dgneOtNUmNN7p5bIbZ1RHa2ebxUH6p+0Tu0ocrWe08nMrhGxdWz3lSY5dr2rBozOfze+xKu2z21f0PlssrTHUX/QPk190HugJ2TSp7fSQp4KrAJ6/SskVnBs41ZArxO2FaCU+Oz+WUGa+s2uvwK6941OFj/az7SO7L4TH0/GsQJ6+krA3gN9lhIVsiUe60AJd0o0ZCTOr09H0xXQCuh7X0xETgnQ9hURM03ErDFM+8oKku3ntA8roPCxkN3CmArYAk8bf1f0J8eTrnfX4VHj392Qq8I6CWEFtL8H+l4bJFTUX1RnFdB+kcKKoXrVTUe4pw7rCLffhfsoiV0jY4mfCN4m5snIUDLYXefdhozWu5qcrNGbklz68NVu/aRGuAn0iEDK4zQpmPCtgFZADwik96wsMaXv24eI+l2478mAbjXQ322dVkDdPVISHGvMrGGyxokmgr0H+oUQAd8R7hMoKmRLPJaACPfUKVvhtUnIJrrdBEG4pzgQsTeBfiZ+W7+Es316ebd+mkD7RQq/ayAlLCrgcyNMxElE3nug7meizvtBxEC4p8JRAb0mEnLkJOBWCGi/rHGh97HrpetOE8jEJyRgdr2rSY3OT9eZGiri1dSAED50PsvP9jjCg/Zpqt+OcE/IpLPztJBJ8EmgiLDSxmsCPSJGDzHR5IP2xxqC9CE8Ighbd3fVc/o+RLhUp/T3VACoj+x6iZjTfbbXmdYDCVqKH+FD57PCaI8jPGifKqD9MvlDDdgCPxcOCXwT6BOxu/C1ExwiiAroEwGq34koJ2NFhoqIuQL6+ZucJiMzCTAZt94D/UJotXCpYJtA+xRuQrQklHcnBksodl103CQo1H9EZKuCP72vxbkC6h4SIpxXjcHq62g91BdUb7SuJtAm0CbQhXvy1FgkQJbYqcEpGdnXp0mqAno9UbD7vlo/kyDcXU92fVN9TUmQ8ElfVwEdOpESoQXO3rui8zWBNoE2gf41gq6AVkDfa8Am+AroqXPo3pYd6VhnRZGczpeul0ZO3/3UojUA53Xae2SEF12/daCEOxEy4XB+fXpdKV7WoafrSHFoAt0bPdr6JZwtD+wKjeXJyfCnEwlKhCl+FdAK6AEB2zhEjJMAknBYgk4bb3ckZBtrtdHt68hY0OSB9oUIxu6PvZ50vSlhfnc9rxqyVRxtHVthoz4igbDnSffZXmdaD1Tfts9tH9L5JqNLhpbqrg8RfSFEjUZJyG7QaiGmSakC2l9jedQMCdtE7Gmd0nms0KeEOfWFFaSJIK2wWGGrgD4RIB5NhZAEkAwFvb4COkQ4As4KULpBKTENy//bF0pM67UNTtdhic0Sj3WgtuEskd5N5B3h9tdYPgnD1L/Ur1O/pbxlz09CscpbxAe7/LSLB72ecGkCbQI9OMNUEKywkhGwQjk1XAX0GmFKhk2gn5NRSqBTgmoCbQKdOPD93/tNRCeUpsRDxLablGyCJgGkxqfX2+uogB4Jhm4pELHbxFABrYC+10DarzZhTvXaBHrswApoBfSAQNqQE/HTvzeBNoE+ELDGdJf4qR7TSY69Z0sjx7tuxdiJ0S6OFdAK6G8E+hBRv0z+inTumgQQwa4SXhNoE2gT6F8I3MXjZHSmfm0CbQJtAn1DoAJ6LVDTxOA86qOEYycP6fva89oENRmVNDETMTeB9rtwLxPdbmFYpz01Gt2ju8u5nM9PyYLWaxt8F9+7EpIdjaWj4fThI0u4q6O683Wunm8Vh6mu0jpPnyZdree0L6geSSDp77ZOCecK6PHjZqt9kb5uqqe7eJyMThNovwv3Mmla4rEERIROhEwJcDcJVUD7MZZHDaWEmRqPnzbCaV9ZQbL9vPoQnX2dXS8Zt36M5QshAp42/i7nQhtmnRYJB12vdc42OdmGXBXWSQgJhwroEYG0zlMhoDq4u55snZMATknfCtv5ulPc7HnumiTRPlHCJ56yfZ7Wg93vCuiww2kB0UZT4dL5bOOtJrepwEg40kKzhbx6HUTc1HAV0OuGoBHhROwT3lQ3llh3jcsuwVOd0t+pHlcnExZfy1urRngXX1pfip+tK8LP1jsdR/1BhmzCtw8RnZCpgPbXWB4lQUbspwyKJXYiCGvcJqdfAc1G37v1MwmCNQppPVRAj7xHfffCqwJaAT0gkD7kYp1p+r4TAe0SOTXGXZMA68BtEqdkkhImJV27X9ZI7CYkEg76u61TwtniVgF1H5NrAv3zM1ApYVEBk1Oiwu0I94ngXQRvickSMglYBfSIAI3SiaB266AC+vljGDQaJD76KXyJV22fp+ul+pyS+LRemqBMBoj2adKlJtAm0CbQNwRIwG3D7wpTSqxNoJ9/LzQVgIm4m0D7MZb32qiAVkAroBXQ8deCaPSaJo5pgkCGg0a09PcK6N5INcWP9pMS7zS5tEkxfZbFvu+5fiugFdAKaAW0Avr1OfHJMEyTCZpIEDGnkwZrFNKJBAlaBfS6MiqgFdAKaAW0AloB/d0FJND0jEk6kSADMo3SJ8E/n99OPMjoTMaqAloBrYBWQJE4JyJKCdMSWvq+RPxpgpqIu/dAew/0vTYqoBXQCmgFtALaBNoE+sYD9OmR16EV0ApoBbQCWgGtgFZAK6D8DTJ00z59eotm7tOsnh5KoJk8XYcdgdnRlx2B0ecSp3sJ9vNZu6NEcpb9GMsTYfu5XVtn6b6n72vr2N7D6wj3ug4sfn0KF5JZei9gaqBUCFJBmojfPiZtX79LOHcRNzV+SkyTYFmhnBqO3jd9nb2uCmj2lXQkfBZ3eh8iXBJI+rs1gJan7Hp/ygjv4ku8muJH+ND5LD/b44jHaZ8mfDvCBaNAwJ8JhAp5IpwK6PHhhAro9ef2JoOU1qk1wKv1nPYFES4JJP09FQAyona9RMxpgLDXmdYDCVqKH+FD57PCaI8jPGifKqD9PdBDDdgCp6RoG8smdDIS03psEmoCbQJ91EpKmHTLhYzxqmDYuiajY/udBLoj3CPSTaBNoJfCahuyApp9F/SqkZj2g0bp9Dk7S6y7xsXWE613SrZE/LZOCWeb3HeFhhLw3QmfBD7Fz9aV3W+774SLfdaCjPbrPBXQCmgF9A0BSsC24S2BUMKnRq6APhGsgF5LvxX8Cujaz5n9D+a6DxyUf30QAAAAAElFTkSuQmCC">
                                            </h2>
                                        </div>
                                        <h3 class="fw-300 display-4 fw-500 color-primary-600 keep-print-font pt-4 l-h-n m-0">
                                            INVOICE
                                        </h3>
                                        <div class="text-dark fw-700 h1 mb-g keep-print-font">
                                            # 1
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 d-flex">
                                        <div class="table-responsive">
                                            <table class="table table-clean table-sm align-self-end">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            Issue Date:
                                                        </td>
                                                        <td>
                                                            05/04/2019
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>Due Date:</strong>
                                                        </td>
                                                        <td>
                                                            05/25/2019
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Net:
                                                        </td>
                                                        <td>
                                                            21
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Currency:
                                                        </td>
                                                        <td>
                                                            USD
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            P.O. #
                                                        </td>
                                                        <td>
                                                            1/3-147
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 ml-sm-auto">
                                        <div class="table-responsive">
                                            <table class="table table-sm table-clean text-right">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <strong>Bill to:</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>Slate Rock and Gravel Company</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            222 Rocky Way
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            30000 Bedrock, Cobblestone County
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            +555 7 123-5555
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            fred@slaterockgravel.bed
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Attn: Fred Flintstone
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table mt-5">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center border-top-0 table-scale-border-bottom fw-700"></th>
                                                        <th class="border-top-0 table-scale-border-bottom fw-700">Item</th>
                                                        <th class="border-top-0 table-scale-border-bottom fw-700">Description</th>
                                                        <th class="text-right border-top-0 table-scale-border-bottom fw-700">Unit Cost</th>
                                                        <th class="text-center border-top-0 table-scale-border-bottom fw-700">Qty</th>
                                                        <th class="text-right border-top-0 table-scale-border-bottom fw-700">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center fw-700">1</td>
                                                        <td class="text-left strong">Origin License</td>
                                                        <td class="text-left">Extended License</td>
                                                        <td class="text-right">$999.00</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-right">$999.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center fw-700">2</td>
                                                        <td class="text-left">Custom Services</td>
                                                        <td class="text-left">Instalation and Customization (cost per hour)</td>
                                                        <td class="text-right">$150.00</td>
                                                        <td class="text-center">20</td>
                                                        <td class="text-right">$3,000.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center fw-700">3</td>
                                                        <td class="text-left">Hosting</td>
                                                        <td class="text-left">1 year subcription</td>
                                                        <td class="text-right">$499.00</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-right">$499.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center fw-700">4</td>
                                                        <td class="text-left">Platinum Support</td>
                                                        <td class="text-left">1 year subcription 24/7</td>
                                                        <td class="text-right">$3,999.00</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-right">$3,999.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 ml-sm-auto">
                                        <table class="table table-clean">
                                            <tbody>
                                                <tr>
                                                    <td class="text-left">
                                                        <strong>Subtotal</strong>
                                                    </td>
                                                    <td class="text-right">$8,497.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">
                                                        <strong>Discount (20%)</strong>
                                                    </td>
                                                    <td class="text-right">$1,699.40</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">
                                                        <strong>VAT (10%)</strong>
                                                    </td>
                                                    <td class="text-right">$679.76</td>
                                                </tr>
                                                <tr class="table-scale-border-top border-left-0 border-right-0 border-bottom-0">
                                                    <td class="text-left keep-print-font">
                                                        <h4 class="m-0 fw-700 h2 keep-print-font color-primary-700">Total</h4>
                                                    </td>
                                                    <td class="text-right keep-print-font">
                                                        <h4 class="m-0 fw-700 h2 keep-print-font">$7,477.36</h4>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">
                                                        <strong>Paid</strong>
                                                    </td>
                                                    <td class="text-right">
                                                        <strong>$0</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left keep-print-font">
                                                        <h4 class="m-0 fw-700 h2 keep-print-font color-primary-700">Amount Due</h4>
                                                    </td>
                                                    <td class="text-right keep-print-font">
                                                        <h4 class="m-0 fw-700 h2 keep-print-font text-danger">$7,477.36</h4>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="py-5 text-primary">
                                            Fred, thank you very much. We really appreciate your business.
                                            <br>
                                            Please send payments before the due date.
                                        </h4>
                                        <p class="mt-2 text-muted mb-0">
                                            Payment details: ACC:123006705 IBAN:US100000060345 SWIFT:BOA447
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!-- this overlay is activated only when mobile menu is triggered -->
                    <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->

                    <!-- BEGIN Shortcuts -->
                    <div class="modal fade modal-backdrop-transparent" id="modal-shortcut" tabindex="-1" role="dialog" aria-labelledby="modal-shortcut" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-top modal-transparent" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <ul class="app-list w-auto h-auto p-0 text-left">
                                        <li>
                                            <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/intel_introduction.html" class="app-list-item text-white border-0 m-0">
                                                <div class="icon-stack">
                                                    <i class="base base-7 icon-stack-3x opacity-100 color-primary-500 "></i>
                                                    <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                                    <i class="fal fa-home icon-stack-1x opacity-100 color-white"></i>
                                                </div>
                                                <span class="app-list-name">
                                                    Home
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/page_inbox_general.html" class="app-list-item text-white border-0 m-0">
                                                <div class="icon-stack">
                                                    <i class="base base-7 icon-stack-3x opacity-100 color-success-500 "></i>
                                                    <i class="base base-7 icon-stack-2x opacity-100 color-success-300 "></i>
                                                    <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                                </div>
                                                <span class="app-list-name">
                                                    Inbox
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.gotbootstrap.com/themes/smartadmin/4.5.1/intel_introduction.html" class="app-list-item text-white border-0 m-0">
                                                <div class="icon-stack">
                                                    <i class="base base-7 icon-stack-2x opacity-100 color-primary-300 "></i>
                                                    <i class="fal fa-plus icon-stack-1x opacity-100 color-white"></i>
                                                </div>
                                                <span class="app-list-name">
                                                    Add More
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Shortcuts -->
                    <!-- BEGIN Color profile -->
                    <!-- this area is hidden and will not be seen on screens or screen readers -->
                    <!-- we use this only for CSS color refernce for JS stuff -->
                    <p id="js-color-profile" class="d-none">
                        <span class="color-primary-50"></span>
                        <span class="color-primary-100"></span>
                        <span class="color-primary-200"></span>
                        <span class="color-primary-300"></span>
                        <span class="color-primary-400"></span>
                        <span class="color-primary-500"></span>
                        <span class="color-primary-600"></span>
                        <span class="color-primary-700"></span>
                        <span class="color-primary-800"></span>
                        <span class="color-primary-900"></span>
                        <span class="color-info-50"></span>
                        <span class="color-info-100"></span>
                        <span class="color-info-200"></span>
                        <span class="color-info-300"></span>
                        <span class="color-info-400"></span>
                        <span class="color-info-500"></span>
                        <span class="color-info-600"></span>
                        <span class="color-info-700"></span>
                        <span class="color-info-800"></span>
                        <span class="color-info-900"></span>
                        <span class="color-danger-50"></span>
                        <span class="color-danger-100"></span>
                        <span class="color-danger-200"></span>
                        <span class="color-danger-300"></span>
                        <span class="color-danger-400"></span>
                        <span class="color-danger-500"></span>
                        <span class="color-danger-600"></span>
                        <span class="color-danger-700"></span>
                        <span class="color-danger-800"></span>
                        <span class="color-danger-900"></span>
                        <span class="color-warning-50"></span>
                        <span class="color-warning-100"></span>
                        <span class="color-warning-200"></span>
                        <span class="color-warning-300"></span>
                        <span class="color-warning-400"></span>
                        <span class="color-warning-500"></span>
                        <span class="color-warning-600"></span>
                        <span class="color-warning-700"></span>
                        <span class="color-warning-800"></span>
                        <span class="color-warning-900"></span>
                        <span class="color-success-50"></span>
                        <span class="color-success-100"></span>
                        <span class="color-success-200"></span>
                        <span class="color-success-300"></span>
                        <span class="color-success-400"></span>
                        <span class="color-success-500"></span>
                        <span class="color-success-600"></span>
                        <span class="color-success-700"></span>
                        <span class="color-success-800"></span>
                        <span class="color-success-900"></span>
                        <span class="color-fusion-50"></span>
                        <span class="color-fusion-100"></span>
                        <span class="color-fusion-200"></span>
                        <span class="color-fusion-300"></span>
                        <span class="color-fusion-400"></span>
                        <span class="color-fusion-500"></span>
                        <span class="color-fusion-600"></span>
                        <span class="color-fusion-700"></span>
                        <span class="color-fusion-800"></span>
                        <span class="color-fusion-900"></span>
                    </p>
                    <!-- END Color profile -->
                </div>
            </div>
        </div>
        <!-- END Page Wrapper -->
        <!-- BEGIN Quick Menu -->
        <!-- END Page Settings -->
        <script>
            (function(i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function()
                {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-141754477-1', 'auto');
            ga('send', 'pageview');

        </script>
        <!-- base vendor bundle: 
			 DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
						+ pace.js (recommended)
						+ jquery.js (core)
						+ jquery-ui-cust.js (core)
						+ popper.js (core)
						+ bootstrap.js (core)
						+ slimscroll.js (extension)
						+ app.navigation.js (core)
						+ ba-throttle-debounce.js (core)
						+ waves.js (extension)
						+ smartpanels.js (extension)
						+ src/../jquery-snippets.js (core) -->
        <script src="./Invoice - Page Views - SmartAdmin v4.5.1_files/vendors.bundle.js.download"></script>
        <script src="./Invoice - Page Views - SmartAdmin v4.5.1_files/app.bundle.js.download"></script>
    
    <!-- END Body -->

</body></html>