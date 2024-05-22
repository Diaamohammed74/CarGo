<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Application Name
	|--------------------------------------------------------------------------
	|
	| This value is the name of your application. This value is used when the
	| framework needs to place the application's name in a notification or
	| any other location as required by the application or its packages.
	|
	*/

	'name' => env('APP_NAME', 'Easy-Spelling'),

	'public' => [
		'global' => [
			'css' => [
				'https://fonts.googleapis.com/css2?family=Material+Icons',
				'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				'css/style.css',
			],
			'js' => [
				'top'=> [
					'vendor/global/global.min.js',
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				],
				'bottom'=> [
					'js/custom.min.js',
					'js/deznav-init.js',
				],
			],
		],
		'pagelevel' => [
			'css' => [
				'YashAdminController_dashboard' => [
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
					'vendor/swiper/css/swiper-bundle.min.css',
					'vendor/nouislider/nouislider.min.css',
					'vendor/datatables/css/buttons.dataTables.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/tagify/dist/tagify.css',
				],
				'YashAdminController_dashboard_2' => [
					'vendor/swiper/css/swiper-bundle.min.css',
					'vendor/nouislider/nouislider.min.css',
					'vendor/datatables/css/buttons.dataTables.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
					'vendor/tagify/dist/tagify.css',
				],
				'YashAdminController_dashboard_3' => [
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'YashAdminController_dashboard_4' => [
					'vendor/swiper/css/swiper-bundle.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/tagify/dist/tagify.css',
					'vendor/nouislider/nouislider.min.css',
					'vendor/datatables/css/buttons.dataTables.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
				],
				'YashAdminController_dashboard_5' => [

				],
				'YashAdminController_user' => [
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/jvmap/jquery-jvectormap.css',
					'vendor/datatables/css/buttons.dataTables.min.css',
				],
				'YashAdminController_chat' => [
					'vendor/swiper/css/swiper-bundle.min.css',
					'vendor/nouislider/nouislider.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/datatables/css/buttons.dataTables.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
					'vendor/tagify/dist/tagify.css',
				],
				'YashAdminController_crm' => [
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'YashAdminController_analytics' => [
					'vendor/swiper/css/swiper-bundle.min.css',
					'vendor/nouislider/nouislider.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/datatables/css/buttons.dataTables.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
					'vendor/tagify/dist/tagify.css',
				],
				'YashAdminController_blog' => [
					'vendor/swiper/css/swiper-bundle.min.css',
					'vendor/nouislider/nouislider.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/datatables/css/buttons.dataTables.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
					'vendor/tagify/dist/tagify.css',
				],
				'YashAdminController_products' => [
					'vendor/swiper/css/swiper-bundle.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/jvmap/jquery-jvectormap.css',
					'vendor/datatables/css/buttons.dataTables.min.css',
					'vendor/tagify/dist/tagify.css',
				],
				'YashAdminController_task' => [
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/jvmap/jquery-jvectormap.css',
					'vendor/tagify/dist/tagify.css',
					'vendor/datatables/css/buttons.dataTables.min.css'
				],
				'YashAdminController_sales' => [
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/datatables/css/buttons.dataTables.min.css',
				],
				'YashAdminController_project' => [

				],
				'YashAdminController_form_wizard' => [
					'vendor/jquery-smartwizard/dist/css/smart_wizard.min.css',
				],
				'YashAdminController_form_ckeditor' => [
				],
				'YashAdminController_app_profile_1' => [
					'vendor/lightgallery/css/lightgallery.min.css',
				],
				'YashAdminController_app_profile_2' => [
					'vendor/lightgallery/css/lightgallery.min.css',
				],
				'YashAdminController_edit_profile' => [
					'vendor/swiper/css/swiper-bundle.min.css'
				],
				'YashAdminController_post_details' => [
					'vendor/lightgallery/css/lightgallery.min.css',
				],
				'YashAdminController_app_calender' => [
					'vendor/fullcalendar/css/main.min.css',
				],
				'YashAdminController_chart_chartist' => [
					'vendor/chartist/css/chartist.min.css',
				],
				'YashAdminController_chart_chartjs' => [
				],
				'YashAdminController_chart_flot' => [
				],
				'YashAdminController_chart_morris' => [
				],
				'YashAdminController_chart_peity' => [
				],
				'YashAdminController_chart_sparkline' => [
				],
				'YashAdminController_ecom_checkout' => [
				],
				'YashAdminController_ecom_customers' => [
				],
				'YashAdminController_ecom_invoice' => [
				],
				'YashAdminController_ecom_product_detail' => [
					'vendor/star-rating/star-rating-svg.css',
				],
				'YashAdminController_ecom_product_grid' => [
				],
				'YashAdminController_ecom_product_list' => [
					'vendor/star-rating/star-rating-svg.css',
				],
				'YashAdminController_ecom_product_order' => [
				],
				'YashAdminController_email_compose' => [
					'vendor/dropzone/dist/dropzone.css',
					'vendor/nouislider/nouislider.min.css'
				],
				'YashAdminController_email_inbox' => [
					'vendor/dropzone/dist/dropzone.css',
					'vendor/nouislider/nouislider.min.css'
				],
				'YashAdminController_email_read' => [
					'vendor/dropzone/dist/dropzone.css',
					'vendor/nouislider/nouislider.min.css'
				],
				'YashAdminController_form_editor_summernote' => [
				],
				'YashAdminController_form_element' => [
				],
				'YashAdminController_form_pickers' => [
					'vendor/bootstrap-daterangepicker/daterangepicker.css',
					'vendor/clockpicker/css/bootstrap-clockpicker.min.css',
					'vendor/jquery-asColorPicker/css/asColorPicker.min.css',
					'vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css',
					'vendor/pickadate/themes/default.css',
					'vendor/pickadate/themes/default.date.css',
				],
				'YashAdminController_form_validation' => [
				],
				'YashAdminController_map_jqvmap' => [
					'vendor/jqvmap/css/jqvmap.min.css',
				],
				'YashAdminController_login' => [
					'vendor/sweetalert2/dist/sweetalert2.min.css',
				],
				'YashAdminController_table_bootstrap_basic' => [
				],
				'YashAdminController_table_datatable_basic' => [
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'YashAdminController_uc_lightgallery' => [
					'vendor/lightgallery/css/lightgallery.min.css',
				],
				'YashAdminController_uc_nestable' => [
					'vendor/nestable2/css/jquery.nestable.min.css',
				],
				'YashAdminController_uc_noui_slider' => [
					'vendor/nouislider/nouislider.min.css',
				],
				'YashAdminController_uc_select2' => [
					'vendor/select2/css/select2.min.css',
				],
				'YashAdminController_uc_sweetalert' => [
					'vendor/sweetalert2/dist/sweetalert2.min.css',
				],
				'YashAdminController_uc_toastr' => [
					'vendor/toastr/css/toastr.min.css',
				],

				'YashAdminController_widget_basic' => [
					'vendor/chartist/css/chartist.min.css',
				],
			],
			'js' => [
				'YashAdminController_dashboard' => [
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/dashboard-1.js',
					'vendor/draggable/draggable.js',
					'vendor/swiper/js/swiper-bundle.min.js',
					'vendor/tagify/dist/tagify.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'vendor/datatables/js/dataTables.buttons.min.js',
					'vendor/datatables/js/buttons.html5.min.js',
					'vendor/datatables/js/jszip.min.js',
					'js/plugins-init/datatables.init.js',
					'vendor/bootstrap-datetimepicker/js/moment.js',
					'vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
					'vendor/jqvmap/js/jquery.vmap.min.js',
					'vendor/jqvmap/js/jquery.vmap.world.js',
					'vendor/jqvmap/js/jquery.vmap.usa.js',
				],
				'YashAdminController_dashboard_2' => [
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/dashboard-1.js',
					'vendor/draggable/draggable.js',
					'vendor/swiper/js/swiper-bundle.min.js',
					'vendor/tagify/dist/tagify.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'vendor/datatables/js/dataTables.buttons.min.js',
					'vendor/datatables/js/buttons.html5.min.js',
					'vendor/datatables/js/jszip.min.js',
					'js/plugins-init/datatables.init.js',
					'vendor/bootstrap-datetimepicker/js/moment.js',
					'vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
					'vendor/jqvmap/js/jquery.vmap.min.js',
					'vendor/jqvmap/js/jquery.vmap.world.js',
					'vendor/jqvmap/js/jquery.vmap.usa.js',
				],
				'YashAdminController_dashboard_3' => [
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/peity/jquery.peity.min.js',
					'js/dashboard/dashboard-2.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'vendor/datatables/js/dataTables.buttons.min.js',
					'vendor/datatables/js/buttons.html5.min.js',
					'vendor/datatables/js/jszip.min.js',
					'js/plugins-init/datatables.init.js',
				],
				'YashAdminController_dashboard_4' => [
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/dashboard-3.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'vendor/datatables/js/dataTables.buttons.min.js',
					'vendor/datatables/js/buttons.html5.min.js',
					'vendor/datatables/js/jszip.min.js',
					'js/plugins-init/datatables.init.js',
					'vendor/bootstrap-datetimepicker/js/moment.js',
					'vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
				],
				'YashAdminController_dashboard_5' => [
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/dashboard-4.js',
				],
				'YashAdminController_user' => [
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'vendor/datatables/js/dataTables.buttons.min.js',
					'vendor/datatables/js/buttons.html5.min.js',
					'vendor/datatables/js/jszip.min.js',
					'js/plugins-init/datatables.init.js',
				],
				'YashAdminController_chat' => [
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
				],
				'YashAdminController_analytics' => [
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/analytics.js',
					'vendor/bootstrap-datetimepicker/js/moment.js',
					'vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
				],
				'YashAdminController_crm' => [
					'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js',
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/peity/jquery.peity.min.js',
					'js/dashboard/crm.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'vendor/datatables/js/dataTables.buttons.min.js',
					'vendor/datatables/js/buttons.html5.min.js',
					'vendor/datatables/js/jszip.min.js',
					'js/plugins-init/datatables.init.js',
				],
				'YashAdminController_products' => [
					'vendor/chart.js/chart.bundle.min.js',
					'js/dashboard/product.js',
					'vendor/swiper/js/swiper-bundle.min.js',
					'vendor/tagify/dist/tagify.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'vendor/datatables/js/dataTables.buttons.min.js',
					'vendor/datatables/js/buttons.html5.min.js',
					'vendor/datatables/js/jszip.min.js',
					'js/plugins-init/datatables.init.js',
				],
				'YashAdminController_sales' => [
					'vendor/global/global.min.js',
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/sales.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'vendor/datatables/js/dataTables.buttons.min.js',
					'vendor/datatables/js/buttons.html5.min.js',
					'vendor/datatables/js/jszip.min.js',
					'js/plugins-init/datatables.init.js',
				],

				'YashAdminController_task' => [
					'vendor/tagify/dist/tagify.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'vendor/datatables/js/dataTables.buttons.min.js',
					'vendor/datatables/js/buttons.html5.min.js',
					'vendor/datatables/js/jszip.min.js',
					'js/plugins-init/datatables.init.js',

				],
				'YashAdminController_project' => [
					'vendor/chart.js/chart.bundle.min.js'
				],
				'YashAdminController_app_calender' => [
					'vendor/moment/moment.min.js',
					'vendor/fullcalendar/js/main.min.js',
					'js/plugins-init/fullcalendar-init.js',
				],
				'YashAdminController_app_profile_1' => [
					'vendor/jquery-nice-select/js/jquery.nice-select.min.js',
					'vendor/lightgallery/js/lightgallery-all.min.js',
				],
				'YashAdminController_app_profile_2' => [
					'vendor/jquery-nice-select/js/jquery.nice-select.min.js',
					'vendor/lightgallery/js/lightgallery-all.min.js',
				],
				'YashAdminController_edit_profile' => [
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/jquery-nice-select/js/jquery.nice-select.min.js',
				],
				'YashAdminController_post_details' => [
					'vendor/lightgallery/js/lightgallery-all.min.js',
					'vendor/jquery-nice-select/js/jquery.nice-select.min.js'
				],
				'YashAdminController_chart_chartist' => [
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/chartist/js/chartist.min.js',
					'vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
					'js/plugins-init/chartist-init.js',
				],
				'YashAdminController_chart_chartjs' => [
					'vendor/chart.js/chart.bundle.min.js',
					'js/plugins-init/chartjs-init.js',
				],
				'YashAdminController_chart_flot' => [
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/flot/jquery.flot.js',
					'vendor/flot/jquery.flot.pie.js',
					'vendor/flot/jquery.flot.resize.js',
					'vendor/flot-spline/jquery.flot.spline.min.js',
					'js/plugins-init/flot-init.js',
				],
				'YashAdminController_chart_morris' => [
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/raphael/raphael.min.js',
					'vendor/morris/morris.min.js',
					'js/plugins-init/morris-init.js',
				],
				'YashAdminController_chart_peity' => [
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/peity/jquery.peity.min.js',
					'js/plugins-init/piety-init.js',
				],
				'YashAdminController_chart_sparkline' => [
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/jquery-sparkline/jquery.sparkline.min.js',
					'js/plugins-init/sparkline-init.js',
					'vendor/svganimation/vivus.min.js',
					'vendor/svganimation/svg.animation.js',
				],
				'YashAdminController_ecom_checkout' => [
				],
				'YashAdminController_ecom_customers' => [
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/highlightjs/highlight.pack.min.js',
				],
				'YashAdminController_ecom_invoice' => [
				],
				'YashAdminController_ecom_product_detail' => [
					'vendor/star-rating/jquery.star-rating-svg.js',
				],
				'YashAdminController_ecom_product_grid' => [
				],
				'YashAdminController_ecom_product_list' => [
					'vendor/star-rating/jquery.star-rating-svg.js',
				],
				'YashAdminController_ecom_product_order' => [
				],
				'YashAdminController_email_compose' => [
					'vendor/dropzone/dist/dropzone.js',
					'vendor/jquery-nice-select/js/jquery.nice-select.min.js'
				],
				'YashAdminController_email_inbox' => [
					'vendor/dropzone/dist/dropzone.js',
				],
				'YashAdminController_email_read' => [
					'vendor/jquery-nice-select/js/jquery.nice-select.min.js',
					'vendor/dropzone/dist/dropzone.js',
				],
				'YashAdminController_form_editor_summernote' => [
					'vendor/ckeditor/ckeditor.js',
				],
				'YashAdminController_form_element' => [
				],
				'YashAdminController_form_pickers' => [
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/moment/moment.min.js',
					'vendor/bootstrap-daterangepicker/daterangepicker.js',
					'vendor/clockpicker/js/bootstrap-clockpicker.min.js',
					'vendor/jquery-asColor/jquery-asColor.min.js',
					'vendor/jquery-asGradient/jquery-asGradient.min.js',
					'vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js',
					'vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js',
					'vendor/pickadate/picker.js',
					'vendor/pickadate/picker.time.js',
					'vendor/pickadate/picker.date.js',
					'js/plugins-init/bs-daterange-picker-init.js',
					'js/plugins-init/clock-picker-init.js',
					'js/plugins-init/jquery-asColorPicker.init.js',
					'js/plugins-init/material-date-picker-init.js',
					'js/plugins-init/pickadate-init.js',
				],
				'YashAdminController_form_validation' => [
				],
				'YashAdminController_form_wizard' => [
					'vendor/jquery-steps/build/jquery.steps.min.js',
					'vendor/jquery-validation/jquery.validate.min.js',
					'js/plugins-init/jquery.validate-init.js',
					'vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js',
				],
				'YashAdminController_form_ckeditor' => [
					'vendor/ckeditor/ckeditor.js',
				],
				'YashAdminController_map_jqvmap' => [
					'vendor/jqvmap/js/jquery.vmap.min.js',
					'vendor/jqvmap/js/jquery.vmap.world.js',
					'vendor/jqvmap/js/jquery.vmap.usa.js',
					'js/plugins-init/jqvmap-init.js',
				],
				'YashAdminController_page_error_400' => [
				],
				'YashAdminController_page_error_403' => [
				],
				'YashAdminController_page_error_404' => [
				],
				'YashAdminController_page_error_500' => [
				],
				'YashAdminController_page_error_503' => [
				],
				'YashAdminController_page_forgot_password' => [
				],
				'YashAdminController_page_lock_screen' => [
					'vendor/deznav/deznav.min.js',
				],
				'YashAdminController_page_login' => [

				],
				'YashAdminController_page_register' => [
				],
				'YashAdminController_table_bootstrap_basic' => [
					'js/highlight.min.js'
				],
				'YashAdminController_table_datatable_basic' => [
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
					'js/highlight.min.js'
				],
				'YashAdminController_uc_lightgallery' => [
					'vendor/lightgallery/js/lightgallery-all.min.js',
				],
				'YashAdminController_uc_nestable' => [
					'vendor/nestable2/js/jquery.nestable.min.js',
					'js/plugins-init/nestable-init.js',
				],
				'YashAdminController_uc_noui_slider' => [
					'vendor/nouislider/nouislider.min.js',
					'vendor/wnumb/wNumb.js',
					'js/plugins-init/nouislider-init.js',
				],
				'YashAdminController_uc_select2' => [
					'vendor/select2/js/select2.full.min.js',
					'js/plugins-init/select2-init.js',
				],
				'YashAdminController_uc_sweetalert' => [
					'vendor/sweetalert2/dist/sweetalert2.min.js',
					'js/plugins-init/sweetalert.init.js',
				],
				'YashAdminController_uc_toastr' => [
					'vendor/toastr/js/toastr.min.js',
					'js/plugins-init/toastr-init.js',
				],
				'YashAdminController_ui_accordion' => [
					'js/highlight.min.js',
				],
				'YashAdminController_ui_alert' => [
					'js/highlight.min.js'
				],
				'YashAdminController_ui_badge' => [
					'js/highlight.min.js'
				],
				'YashAdminController_ui_button' => [
					'js/highlight.min.js'
				],
				'YashAdminController_ui_button_group' => [
					'js/highlight.min.js'
				],
				'YashAdminController_ui_card' => [
					'js/highlight.min.js'
				],
				'YashAdminController_ui_carousel' => [
					'js/highlight.min.js'
				],
				'YashAdminController_ui_dropdown' => [
					'js/highlight.min.js'
				],
				'YashAdminController_ui_grid' => [
				],
				'YashAdminController_ui_list_group' => [
				],
				'YashAdminController_ui_media_object' => [
				],
				'YashAdminController_ui_modal' => [
				],
				'YashAdminController_ui_pagination' => [
					'js/highlight.min.js'
				],
				'YashAdminController_ui_popover' => [
				],
				'YashAdminController_ui_progressbar' => [
					'js/highlight.min.js'
				],
				'YashAdminController_ui_tab' => [
					'js/highlight.min.js'
				],
				'YashAdminController_ui_typography' => [
				],
				'YashAdminController_widget_basic' => [
					'vendor/chart.js/chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/chartist/js/chartist.min.js',
					'vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
					'vendor/flot/jquery.flot.js',
					'vendor/flot/jquery.flot.pie.js',
					'vendor/flot/jquery.flot.resize.js',
					'vendor/flot-spline/jquery.flot.spline.min.js',
					'vendor/jquery-sparkline/jquery.sparkline.min.js',
					'js/plugins-init/sparkline-init.js',
					'vendor/peity/jquery.peity.min.js',
					'js/plugins-init/piety-init.js',
					'js/plugins-init/widgets-script-init.js',
				],
			]
		],
	]
];
