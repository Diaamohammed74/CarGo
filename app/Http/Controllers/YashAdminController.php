<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YashAdminController extends Controller{

	// Dashboard
	public function dashboard(){
		$page_title = 'Dashboard';
        $page_description = 'Some description for the page';
		return view('dashboard.index', compact('page_title', 'page_description'));
	}

	// Dashboard
	public function dashboard_2(){
		$page_title = 'Dashboard';
        $page_description = 'Some description for the page';
		return view('dashboard.index_2', compact('page_title', 'page_description'));
	}

	// Dashboard 2
	public function dashboard_3(){
		$page_title = 'Dashboard 2';
        $page_description = 'Some description for the page';
		return view('dashboard.index_3', compact('page_title', 'page_description'));
	}

	// Dashboard 3
	public function dashboard_4(){
		$page_title = 'Dashboard 3';
        $page_description = 'Some description for the page';
		return view('dashboard.index_4', compact('page_title', 'page_description'));
	}

	// Dashboard 4
	public function dashboard_5(){
		$page_title = 'Dashboard 4';
        $page_description = 'Some description for the page';
		return view('dashboard.index_5', compact('page_title', 'page_description'));
	}

	// CRM
	public function crm(){
		$page_title = 'CRM';
        $page_description = 'Some description for the page';
		return view('dashboard.crm', compact('page_title', 'page_description'));
	}

	// Analytics
	public function analytics(){
		$page_title = 'Analytics';
        $page_description = 'Some description for the page';
		return view('dashboard.analytic', compact('page_title', 'page_description'));
	}

	// Products
	public function products(){
		$page_title = 'Products';
        $page_description = 'Some description for the page';
		return view('dashboard.products', compact('page_title', 'page_description'));
	}

	// Sales
	public function sales(){
		$page_title = 'Sales';
        $page_description = 'Some description for the page';
		return view('dashboard.sales', compact('page_title', 'page_description'));
	}

	// Blog
	public function blog(){
		$page_title = 'Blog';
        $page_description = 'Some description for the page';
		return view('dashboard.blog', compact('page_title', 'page_description'));
	}

	// Task
	public function task(){
		$page_title = 'Task';
        $page_description = 'Some description for the page';
		return view('dashboard.task.task', compact('page_title', 'page_description'));
	}

	// Project
	public function project(){
		$page_title = 'Project';
        $page_description = 'Some description for the page';
		return view('dashboard.projects.project', compact('page_title', 'page_description'));
	}

	// Calender
	public function app_calender(){
		$page_title = 'Calender';
        $page_description = 'Some description for the page';
		return view('dashboard.app.calender', compact('page_title', 'page_description'));
	}

	// Product Grid
	public function ecom_product_grid(){
		$page_title = 'Product Grid';
        $page_description = 'Some description for the page';
		return view('dashboard.ecom.product_grid', compact('page_title', 'page_description'));
	}

	// Product List
	public function ecom_product_list(){
		$page_title = 'Product List';
        $page_description = 'Some description for the page';
		return view('dashboard.ecom.product_list', compact('page_title', 'page_description'));
	}

	// Product Detail
	public function ecom_product_detail(){
		$page_title = 'Product Detail';
        $page_description = 'Some description for the page';
		return view('dashboard.ecom.product_detail', compact('page_title', 'page_description'));
	}

	// Product Order
	public function ecom_product_order(){
		$page_title = 'Product Order';
        $page_description = 'Some description for the page';
		return view('dashboard.ecom.product_order', compact('page_title', 'page_description'));
	}

	// Checkout
	public function ecom_checkout(){
		$page_title = 'Checkout';
        $page_description = 'Some description for the page';
		return view('dashboard.ecom.checkout', compact('page_title', 'page_description'));
	}

	// Invoice
	public function ecom_invoice(){
		$page_title = 'Invoice';
        $page_description = 'Some description for the page';
		return view('dashboard.ecom.invoice', compact('page_title', 'page_description'));
	}

	// Customers
	public function ecom_customers(){
		$page_title = 'Customers';
        $page_description = 'Some description for the page';
		return view('dashboard.ecom.customers', compact('page_title', 'page_description'));
	}

	// Email Compose
	public function email_compose(){
		$page_title = 'Email Compose';
        $page_description = 'Some description for the page';
		return view('dashboard.message.compose', compact('page_title', 'page_description'));
	}

	// Email Read
	public function email_read(){
		$page_title = 'Email Read';
        $page_description = 'Some description for the page';
		return view('dashboard.message.read', compact('page_title', 'page_description'));
	}

	// Email Inbox
	public function email_inbox(){
		$page_title = 'Email Inbox';
        $page_description = 'Some description for the page';
		return view('dashboard.message.inbox', compact('page_title', 'page_description'));
	}

	// Users
	public function user(){
		$page_title = 'Users';
        $page_description = 'Some description for the page';
		return view('dashboard.users_manager.user', compact('page_title', 'page_description'));
	}

	// Chat
	public function chat(){
		$page_title = 'Chat';
        $page_description = 'Some description for the page';
		return view('dashboard.app.chat', compact('page_title', 'page_description'));
	}

	// Profile Detail 1
	public function app_profile_1(){
		$page_title = 'Profile Detail 1';
        $page_description = 'Some description for the page';
		return view('dashboard.users_manager.app_profile_1', compact('page_title', 'page_description'));
	}

	// Profile Detail 2
	public function app_profile_2(){
		$page_title = 'Profile Detail 2';
        $page_description = 'Some description for the page';
		return view('dashboard.users_manager.app_profile_2', compact('page_title', 'page_description'));
	}

	// Edit Profile
	public function edit_profile(){
		$page_title = 'Edit Profile';
        $page_description = 'Some description for the page';
		return view('dashboard.users_manager.edit_profile', compact('page_title', 'page_description'));
	}

	// Post Details
	public function post_details(){
		$page_title = 'Post Details';
        $page_description = 'Some description for the page';
		return view('dashboard.users_manager.post_details', compact('page_title', 'page_description'));
	}

	// Flot Chart
	public function chart_flot(){
		$page_title = 'Flot Chart';
        $page_description = 'Some description for the page';
		return view('dashboard.chart.flot', compact('page_title', 'page_description'));
	}

	// Morris Chart
	public function chart_morris(){
		$page_title = 'Morris Chart';
        $page_description = 'Some description for the page';
		return view('dashboard.chart.morris', compact('page_title', 'page_description'));
	}

	// Flot Chartjs
	public function chart_chartjs(){
		$page_title = 'Chartjs';
        $page_description = 'Some description for the page';
		return view('dashboard.chart.chartjs', compact('page_title', 'page_description'));
	}

	// Chartlist Chart
	public function chart_chartist(){
		$page_title = 'Chartlist Chart';
        $page_description = 'Some description for the page';
		return view('dashboard.chart.chartist', compact('page_title', 'page_description'));
	}

	// Sparkline  Chart
	public function chart_sparkline(){
		$page_title = 'Sparkline  Chart';
        $page_description = 'Some description for the page';
		return view('dashboard.chart.sparkline', compact('page_title', 'page_description'));
	}

	// Peity  Chart
	public function chart_peity(){
		$page_title = 'Peity  Chart';
        $page_description = 'Some description for the page';
		return view('dashboard.chart.peity', compact('page_title', 'page_description'));
	}

	// Accordion
	public function ui_accordion(){
		$page_title = 'Accordion';
        $page_description = 'Some description for the page';
		return view('dashboard.ui.accordion', compact('page_title', 'page_description'));
	}

	// Alert
	public function ui_alert(){
		$page_title = 'Alert';
        $page_description = 'Some description for the page';
		return view('dashboard.ui.alert', compact('page_title', 'page_description'));
	}

	// Badge
	public function ui_badge(){
		$page_title = 'Badge';
        $page_description = 'Some description for the page';
		return view('dashboard.ui.badge', compact('page_title', 'page_description'));
	}

	// Button
	public function ui_button(){
		$page_title = 'Button';
        $page_description = 'Some description for the page';
		return view('dashboard.ui.button', compact('page_title', 'page_description'));
	}

	// Modal
	public function ui_modal(){
		$page_title = 'Modal';
        $page_description = 'Some description for the page';
		return view('dashboard.ui.modal', compact('page_title', 'page_description'));
	}

	// Button Group
	public function ui_button_group(){
		$page_title = 'Button Group';
        $page_description = 'Some description for the page';
		return view('dashboard.ui.button_group', compact('page_title', 'page_description'));
	}

	// List Group
	public function ui_list_group(){
		$page_title = 'List Group';
        $page_description = 'Some description for the page';
		return view('dashboard.ui.list_group', compact('page_title', 'page_description'));
	}

	// Card
	public function ui_card(){
		$page_title = 'Card';
        $page_description = 'Some description for the page';
		return view('dashboard.ui.card', compact('page_title', 'page_description'));
	}

	// Carousel
	public function ui_carousel(){
		$page_title = 'Carousel';
        $page_description = 'Some description for the page';
		return view('dashboard.ui.carousel', compact('page_title', 'page_description'));
	}

	// Dropdown
	public function ui_dropdown(){
		$page_title = 'Dropdown';
        $page_description = 'Some description for the page';
		return view('dashboard.ui.dropdown', compact('page_title', 'page_description'));
	}

	// Popover
	public function ui_popover(){
		$page_title = 'Popover';
        $page_description = 'Some description for the page';
		return view('dashboard.ui.popover', compact('page_title', 'page_description'));
	}

	// Progressbar
	public function ui_progressbar(){
		$page_title = 'Progressbar';
        $page_description = 'Some description for the page';
		return view('dashboard.ui.progressbar', compact('page_title', 'page_description'));
	}

	// Tab
	public function ui_tab(){
		$page_title = 'Tab';
        $page_description = 'Some description for the page';
		return view('dashboard.ui.tab', compact('page_title', 'page_description'));
	}

	// Typography
	public function ui_typography(){
		$page_title = 'Typography';
        $page_description = 'Some description for the page';
		return view('dashboard.ui.typography', compact('page_title', 'page_description'));
	}

	// Pagination
	public function ui_pagination(){
		$page_title = 'Pagination';
        $page_description = 'Some description for the page';
		return view('dashboard.ui.pagination', compact('page_title', 'page_description'));
	}

	// Grid
	public function ui_grid(){
		$page_title = 'Grid';
        $page_description = 'Some description for the page';
		return view('dashboard.ui.grid', compact('page_title', 'page_description'));
	}

	// Select2
	public function uc_select2(){
		$page_title = 'Select2';
        $page_description = 'Some description for the page';
		return view('dashboard.uc.select2', compact('page_title', 'page_description'));
	}

	// Nestable
	public function uc_nestable(){
		$page_title = 'Nestable';
        $page_description = 'Some description for the page';
		return view('dashboard.uc.nestable', compact('page_title', 'page_description'));
	}

	// Noui Slider
	public function uc_noui_slider(){
		$page_title = 'Noui Slider';
        $page_description = 'Some description for the page';
		return view('dashboard.uc.noui_slider', compact('page_title', 'page_description'));
	}

	// Sweetalert
	public function uc_sweetalert(){
		$page_title = 'Sweetalert';
        $page_description = 'Some description for the page';
		return view('dashboard.uc.sweetalert', compact('page_title', 'page_description'));
	}

	// Toastr
	public function uc_toastr(){
		$page_title = 'Toastr';
        $page_description = 'Some description for the page';
		return view('dashboard.uc.toastr', compact('page_title', 'page_description'));
	}

	// Jqvmap
	public function map_jqvmap(){
		$page_title = 'Jqvmap';
        $page_description = 'Some description for the page';
		return view('dashboard.map.jqvmap', compact('page_title', 'page_description'));
	}

	// Lightgallery
	public function uc_lightgallery(){
		$page_title = 'Lightgallery';
        $page_description = 'Some description for the page';
		return view('dashboard.uc.lightgallery', compact('page_title', 'page_description'));
	}

	// Widget Basic
	public function widget_basic(){
		$page_title = 'Widget Basic';
        $page_description = 'Some description for the page';
		return view('dashboard.widget.widget_basic', compact('page_title', 'page_description'));
	}

	// Form Element
	public function form_element(){
		$page_title = 'Form Element';
        $page_description = 'Some description for the page';
		return view('dashboard.form.element', compact('page_title', 'page_description'));
	}

	// Form Wizard
	public function form_wizard(){
		$page_title = 'Form Wizard';
        $page_description = 'Some description for the page';
		return view('dashboard.form.wizard', compact('page_title', 'page_description'));
	}

	// Form Ckeditor
	public function form_ckeditor(){
		$page_title = 'Form Ckeditor';
        $page_description = 'Some description for the page';
		return view('dashboard.form.ckeditor', compact('page_title', 'page_description'));
	}

	// Form Pickers
	public function form_pickers(){
		$page_title = 'Form Pickers';
        $page_description = 'Some description for the page';
		return view('dashboard.form.pickers', compact('page_title', 'page_description'));
	}

	// Form Validation
	public function form_validation(){
		$page_title = 'Form Validation';
        $page_description = 'Some description for the page';
		return view('dashboard.form.validation', compact('page_title', 'page_description'));
	}

	// Basic Bootstrap Table
	public function table_bootstrap_basic(){
		$page_title = 'Basic Bootstrap Table';
        $page_description = 'Some description for the page';
		return view('dashboard.table.bootstrap_basic', compact('page_title', 'page_description'));
	}

	// Basic DataTable
	public function table_datatable_basic(){
		$page_title = 'Basic DataTable';
        $page_description = 'Some description for the page';
		return view('dashboard.table.datatable_basic', compact('page_title', 'page_description'));
	}

	// Login
	public function page_login (){
		$page_title = 'Login';
        $page_description = 'Some description for the page';
		return view('dashboard.page.login', compact('page_title', 'page_description'));
	}

	// Register
	public function page_register(){
		$page_title = 'Register';
        $page_description = 'Some description for the page';
		return view('dashboard.page.register', compact('page_title', 'page_description'));
	}

	// Error 400
	public function page_error_400(){
		$page_title = 'Error 400';
        $page_description = 'Some description for the page';
		return view('dashboard.page.error_400', compact('page_title', 'page_description'));
	}

	// Error 403
	public function page_error_403(){
		$page_title = 'Error 403';
        $page_description = 'Some description for the page';
		return view('dashboard.page.error_403', compact('page_title', 'page_description'));
	}

	// Error 405
	public function page_error_404(){
		$page_title = 'Error 404';
        $page_description = 'Some description for the page';
		return view('dashboard.page.error_404', compact('page_title', 'page_description'));
	}

	// Error 500
	public function page_error_500(){
		$page_title = 'Error 500';
        $page_description = 'Some description for the page';
		return view('dashboard.page.error_500', compact('page_title', 'page_description'));
	}

	// Error 503
	public function page_error_503(){
		$page_title = 'Error 503';
        $page_description = 'Some description for the page';
		return view('dashboard.page.error_503', compact('page_title', 'page_description'));
	}

	// Empty Page
	public function empty_page(){
		$page_title = 'Empty Page';
        $page_description = 'Some description for the page';
		return view('dashboard.page.empty_page', compact('page_title', 'page_description'));
	}

	// Lock Screen
	public function page_lock_screen(){
		$page_title = 'Lock Screen';
        $page_description = 'Some description for the page';
		return view('dashboard.page.lock_screen', compact('page_title', 'page_description'));
	}

	// Ajax Recent Activity
    public function recent_activities_ajax(){
        return view('dashboard.ajax.recentactivity');
    }

    // Ajax Recent Activity
    public function contacts_ajax(){
        return view('dashboard.ajax.contacts');
    }

    // Ajax Featured Companies
    public function featured_companies_ajax(){
        return view('dashboard.ajax.featuredcompanies');
    }

    // Ajax Message
    public function message_ajax(){
        return view('dashboard.ajax.message');
    }
}

