<?php

defined('BASEPATH') or exit('No direct script access allowed');

function app_init_admin_sidebar_menu_items()
{
    $CI = &get_instance();

    $CI->app_menu->add_sidebar_menu_item('dashboard', [
        'name'     => _l('als_dashboard'),
        'href'     => admin_url(),
        'position' => 1,
        'icon'     => 'fa fa-home',
    ]);

    $CI->app_menu->add_sidebar_children_item('dashboard', [
            'slug'     => 'useful_graphs',
            'name'     => _l('Useful Graphs'),
            'href'     => admin_url('useful_graphs'),
            'position' => 5,
    ]);

    $CI->app_menu->add_sidebar_menu_item('Products', [
        'name'     => _l('Products'),
        'position' => 5,
        'icon'     => 'fa fa-product-hunt',
    ]);  

    $CI->app_menu->add_sidebar_children_item('Products', [
        'slug'     => 'products_list',
        'name'     => _l('Products List'),
        'href'     => admin_url('products_list'),
        'position' => 5,
    ]);

    $CI->app_menu->add_sidebar_children_item('Products', [
        'slug'     => 'products_receipts',
        'name'     => _l('Products Receipts'),
        'href'     => admin_url('products_receipts'),
        'position' => 10,
    ]);

    $CI->app_menu->add_sidebar_menu_item('Planing', [
        'name'     => _l('Planing'),
        'position' => 10,
        'icon'     => 'fa fa-tasks',
    ]);

    $CI->app_menu->add_sidebar_children_item('Planing', [
        'slug'     => 'pending_sales_order',
        'name'     => _l('Pending Sales Order'),
        'href'     => admin_url('pending_sales_order'),
        'position' => 5,
    ]);

    $CI->app_menu->add_sidebar_children_item('Planing', [
        'slug'     => 'work_oders',
        'name'     => _l('Work Orders'),
        'href'     => admin_url('work_oders'),
        'position' => 10,
    ]);

    $CI->app_menu->add_sidebar_menu_item('Production', [
        'name'     => _l('Production'),
        'position' => 15,
        'icon'     => 'fa fa-industry',
    ]);

    $CI->app_menu->add_sidebar_children_item('Production', [
        'slug'     => 'work_oders',
        'name'     => _l('Work Orders'),
        'href'     => admin_url('work_oders'),
        'position' => 5,
    ]);

    $CI->app_menu->add_sidebar_children_item('Production', [
        'slug'     => 'list_of_machinery',
        'name'     => _l('List of Machinery'),
        'href'     => admin_url('list_of_machinery'),
        'position' => 10,
    ]);


    $CI->app_menu->add_sidebar_menu_item('Installation', [
        'name'     => _l('Installation'),
        'position' => 20,
        'icon'     => 'fa fa-window-restore',
    ]);

    $CI->app_menu->add_sidebar_children_item('Installation', [
        'slug'     => 'work_oders',
        'name'     => _l('Work Orders'),
        'href'     => admin_url('work_oders'),
        'position' => 5,
    ]);

    $CI->app_menu->add_sidebar_menu_item('Accounts', [
        'name'     => _l('Accounts'),
        'position' => 25,
        'icon'     => 'fa fa-id-card',
    ]);

    $CI->app_menu->add_sidebar_children_item('Accounts', [
        'slug'     => 'accounts_list',
        'name'     => _l('Accounts List'),
        'href'     => admin_url('accounts_list'),
        'position' => 5,
    ]);

   $CI->app_menu->add_sidebar_menu_item('Sale', [
        'name'     => _l('Sale'),
        'position' => 30,
        'icon'     => 'fa fa-shopping-cart',
    ]);

    $CI->app_menu->add_sidebar_children_item('Sale', [
        'slug'     => 'quotation_offer',
        'name'     => _l('Quotation / Offer'),
        'href'     => admin_url('quotation_offer'),
        'position' => 5,
    ]);

    $CI->app_menu->add_sidebar_children_item('Sale', [
        'slug'     => 'quotation_approval',
        'name'     => _l('Quotation Approval'),
        'href'     => admin_url('quotation_approval'),
        'position' => 10,
    ]);

    $CI->app_menu->add_sidebar_children_item('Sale', [
        'slug'     => 'sale_order',
        'name'     => _l('Sale Order'),
        'href'     => admin_url('sale_order'),
        'position' => 15,
    ]);

   $CI->app_menu->add_sidebar_menu_item('Purchase', [
        'name'     => _l('Purchase'),
        'position' => 35,
        'icon'     => 'fa fa-shopping-bag',
    ]);

    $CI->app_menu->add_sidebar_children_item('Purchase', [
        'slug'     => 'purchase_orders',
        'name'     => _l('Purchase Orders'),
        'href'     => admin_url('purchase_orders'),
        'position' => 5,
    ]);

    $CI->app_menu->add_sidebar_children_item('Purchase', [
        'slug'     => 'pending_purchase_requests',
        'name'     => _l('Pending Purchase Requests'),
        'href'     => admin_url('pending_purchase_requests'),
        'position' => 10,
    ]);

   $CI->app_menu->add_sidebar_menu_item('Warehouse', [
        'name'     => _l('Warehouse'),
        'position' => 40,
        'icon'     => 'fa fa-home',
    ]);

    $CI->app_menu->add_sidebar_children_item('Warehouse', [
        'slug'     => 'stock_list',
        'name'     => _l('Stock List'),
        'href'     => admin_url('stock_list'),
        'position' => 5,
    ]);

    $CI->app_menu->add_sidebar_children_item('Warehouse', [
        'slug'     => 'transfer',
        'name'     => _l('Transfer'),
        'href'     => admin_url('transfer'),
        'position' => 10,
    ]);

    $CI->app_menu->add_sidebar_children_item('Warehouse', [
        'slug'     => 'allocated_items',
        'name'     => _l('Allocated Items'),
        'href'     => admin_url('allocated_items'),
        'position' => 15,
    ]);

    $CI->app_menu->add_sidebar_children_item('Warehouse', [
        'slug'     => 'list_of_packaging',
        'name'     => _l('List of Packaging'),
        'href'     => admin_url('list_of_packaging'),
        'position' => 20,
    ]); 

    $CI->app_menu->add_sidebar_children_item('Warehouse', [
        'slug'     => 'purchase_receiving_bay',
        'name'     => _l('Purchase Receiving Bay'),
        'href'     => admin_url('purchase_receiving_bay'),
        'position' => 25,
    ]); 

    $CI->app_menu->add_sidebar_children_item('Warehouse', [
        'slug'     => 'purchase_request',
        'name'     => _l('Purchase Request'),
        'href'     => admin_url('purchase_request'),
        'position' => 30,
    ]); 

    $CI->app_menu->add_sidebar_children_item('Warehouse', [
        'slug'     => 'barcode_list',
        'name'     => _l('Barcode List'),
        'href'     => admin_url('barcode_list'),
        'position' => 35,
    ]); 

   $CI->app_menu->add_sidebar_menu_item('Finanace', [
        'name'     => _l('Finanace'),
        'position' => 45,
        'icon'     => 'fa fa-money',
    ]);

    $CI->app_menu->add_sidebar_children_item('Finanace', [
        'slug'     => 'currency_exchane_rate',
        'name'     => _l('Currency / Exchange Rate'),
        'href'     => admin_url('currency_exchane_rate'),
        'position' => 5,
    ]);

    $CI->app_menu->add_sidebar_children_item('Finanace', [
        'slug'     => 'ready_to_invoice',
        'name'     => _l('Ready to Invoice'),
        'href'     => admin_url('ready_to_invoice'),
        'position' => 10,
    ]);

   $CI->app_menu->add_sidebar_menu_item('Reports', [
        'name'     => _l('Reports'),
        'position' => 50,
        'icon'     => 'fa fa-file',
    ]);

    $CI->app_menu->add_sidebar_children_item('Reports', [
        'slug'     => 'profit_report',
        'name'     => _l('Profit Report'),
        'href'     => admin_url('profit_report'),
        'position' => 5,
    ]);

    $CI->app_menu->add_sidebar_children_item('Reports', [
        'slug'     => 'sale_report',
        'name'     => _l('Sale Report'),
        'href'     => admin_url('sale_report'),
        'position' => 10,
    ]);

    $CI->app_menu->add_sidebar_children_item('Reports', [
        'slug'     => 'work_orders_report',
        'name'     => _l('Work Orders Report'),
        'href'     => admin_url('work_orders_report'),
        'position' => 15,
    ]);

    $CI->app_menu->add_sidebar_children_item('Reports', [
        'slug'     => 'warehouse_report',
        'name'     => _l('Warehouse Report'),
        'href'     => admin_url('warehouse_report'),
        'position' => 20,
    ]);

   $CI->app_menu->add_sidebar_menu_item('Message Box', [
        'name'     => _l('Message Box'),
        'position' => 55,
        'icon'     => 'fa fa-envelope',
    ]);

    $CI->app_menu->add_sidebar_children_item('Message Box', [
        'slug'     => 'send_receive',
        'name'     => _l('Send - Receive'),
        'href'     => admin_url('send_receive'),
        'position' => 5,
    ]);

  $CI->app_menu->add_sidebar_menu_item('Manufacturing Settings', [
        'name'     => _l('Manufacturing Settings'),
        'position' => 60,
        'icon'     => 'fa fa-cogs',
    ]);

    $CI->app_menu->add_sidebar_children_item('Manufacturing Settings', [
        'slug'     => 'list_of_machinery',
        'name'     => _l('List of Machinery'),
        'href'     => admin_url('list_of_machinery'),
        'position' => 5,
    ]);

    $CI->app_menu->add_sidebar_children_item('Manufacturing Settings', [
        'slug'     => 'list_of_moulds',
        'name'     => _l('List of Moulds'),
        'href'     => admin_url('list_of_moulds'),
        'position' => 10,
    ]);

    $CI->app_menu->add_sidebar_children_item('Manufacturing Settings', [
        'slug'     => 'energy_prices',
        'name'     => _l('Energy Prices'),
        'href'     => admin_url('energy_prices'),
        'position' => 15,
    ]);

    $CI->app_menu->add_sidebar_children_item('Manufacturing Settings', [
        'slug'     => 'work_hours_capacity',
        'name'     => _l('Work Hours Capacity'),
        'href'     => admin_url('work_hours_capacity'),
        'position' => 20,
    ]); 

    $CI->app_menu->add_sidebar_children_item('Manufacturing Settings', [
        'slug'     => 'installation',
        'name'     => _l('Installation'),
        'href'     => admin_url('installation'),
        'position' => 25,
    ]); 



    // if (has_permission('customers', '', 'view')
    //     || (have_assigned_customers()
    //     || (!have_assigned_customers() && has_permission('customers', '', 'create')))) {
    //     $CI->app_menu->add_sidebar_menu_item('customers', [
    //         'name'     => _l('als_clients'),
    //         'href'     => admin_url('clients'),
    //         'position' => 5,
    //         'icon'     => 'fa fa-user-o',
    //     ]);
    // }

    // $CI->app_menu->add_sidebar_menu_item('sales', [
    //         'collapse' => true,
    //         'name'     => _l('als_sales'),
    //         'position' => 10,
    //         'icon'     => 'fa fa-balance-scale',
    //     ]);

    // if ((has_permission('proposals', '', 'view') || has_permission('proposals', '', 'view_own'))
    //     || (staff_has_assigned_proposals() && get_option('allow_staff_view_proposals_assigned') == 1)) {
    //     $CI->app_menu->add_sidebar_children_item('sales', [
    //             'slug'     => 'proposals',
    //             'name'     => _l('proposals'),
    //             'href'     => admin_url('proposals'),
    //             'position' => 5,
    //     ]);
    // }

    // if ((has_permission('estimates', '', 'view') || has_permission('estimates', '', 'view_own'))
    //     || (staff_has_assigned_estimates() && get_option('allow_staff_view_estimates_assigned') == 1)) {
    //     $CI->app_menu->add_sidebar_children_item('sales', [
    //             'slug'     => 'estimates',
    //             'name'     => _l('estimates'),
    //             'href'     => admin_url('estimates'),
    //             'position' => 10,
    //     ]);
    // }

    // if ((has_permission('invoices', '', 'view') || has_permission('invoices', '', 'view_own'))
    //      || (staff_has_assigned_invoices() && get_option('allow_staff_view_invoices_assigned') == 1)) {
    //     $CI->app_menu->add_sidebar_children_item('sales', [
    //             'slug'     => 'invoices',
    //             'name'     => _l('invoices'),
    //             'href'     => admin_url('invoices'),
    //             'position' => 15,
    //     ]);
    // }

    // if (has_permission('payments', '', 'view') || has_permission('invoices', '', 'view_own')
    //        || (get_option('allow_staff_view_invoices_assigned') == 1 && staff_has_assigned_invoices())) {
    //     $CI->app_menu->add_sidebar_children_item('sales', [
    //             'slug'     => 'payments',
    //             'name'     => _l('payments'),
    //             'href'     => admin_url('payments'),
    //             'position' => 20,
    //     ]);
    // }

    // if (has_permission('credit_notes', '', 'view') || has_permission('credit_notes', '', 'view_own')) {
    //     $CI->app_menu->add_sidebar_children_item('sales', [
    //             'slug'     => 'credit_notes',
    //             'name'     => _l('credit_notes'),
    //             'href'     => admin_url('credit_notes'),
    //             'position' => 25,
    //     ]);
    // }

    // if (has_permission('items', '', 'view')) {
    //     $CI->app_menu->add_sidebar_children_item('sales', [
    //             'slug'     => 'items',
    //             'name'     => _l('items'),
    //             'href'     => admin_url('invoice_items'),
    //             'position' => 30,
    //     ]);
    // }

    // if (has_permission('subscriptions', '', 'view') || has_permission('subscriptions', '', 'view_own')) {
    //     $CI->app_menu->add_sidebar_menu_item('subscriptions', [
    //             'name'     => _l('subscriptions'),
    //             'href'     => admin_url('subscriptions'),
    //             'icon'     => 'fa fa-repeat',
    //             'position' => 15,
    //     ]);
    // }

    // if (has_permission('expenses', '', 'view') || has_permission('expenses', '', 'view_own')) {
    //     $CI->app_menu->add_sidebar_menu_item('expenses', [
    //             'name'     => _l('expenses'),
    //             'href'     => admin_url('expenses'),
    //             'icon'     => 'fa fa-file-text-o',
    //             'position' => 20,
    //     ]);
    // }

    // if (has_permission('contracts', '', 'view') || has_permission('contracts', '', 'view_own')) {
    //     $CI->app_menu->add_sidebar_menu_item('contracts', [
    //             'name'     => _l('contracts'),
    //             'href'     => admin_url('contracts'),
    //             'icon'     => 'fa fa-file',
    //             'position' => 25,
    //     ]);
    // }

    // $CI->app_menu->add_sidebar_menu_item('projects', [
    //             'name'     => _l('projects'),
    //             'href'     => admin_url('projects'),
    //             'icon'     => 'fa fa-bars',
    //             'position' => 30,
    //     ]);

    // $CI->app_menu->add_sidebar_menu_item('tasks', [
    //             'name'     => _l('als_tasks'),
    //             'href'     => admin_url('tasks'),
    //             'icon'     => 'fa fa-tasks',
    //             'position' => 35,
    //     ]);

    // if ((!is_staff_member() && get_option('access_tickets_to_none_staff_members') == 1) || is_staff_member()) {
    //     $CI->app_menu->add_sidebar_menu_item('support', [
    //             'name'     => _l('support'),
    //             'href'     => admin_url('tickets'),
    //             'icon'     => 'fa fa-ticket',
    //             'position' => 40,
    //     ]);
    // }

    // if (is_staff_member()) {
    //     $CI->app_menu->add_sidebar_menu_item('leads', [
    //             'name'     => _l('als_leads'),
    //             'href'     => admin_url('leads'),
    //             'icon'     => 'fa fa-tty',
    //             'position' => 45,
    //     ]);
    // }

    // if (has_permission('knowledge_base', '', 'view')) {
    //     $CI->app_menu->add_sidebar_menu_item('knowledge-base', [
    //             'name'     => _l('als_kb'),
    //             'href'     => admin_url('knowledge_base'),
    //             'icon'     => 'fa fa-folder-open-o',
    //             'position' => 50,
    //     ]);
    // }

    // // Utilities
    // $CI->app_menu->add_sidebar_menu_item('utilities', [
    //         'collapse' => true,
    //         'name'     => _l('als_utilities'),
    //         'position' => 55,
    //         'icon'     => 'fa fa-cogs',
    //     ]);

    // $CI->app_menu->add_sidebar_children_item('utilities', [
    //             'slug'     => 'media',
    //             'name'     => _l('als_media'),
    //             'href'     => admin_url('utilities/media'),
    //             'position' => 5,
    //     ]);

    // if (has_permission('bulk_pdf_exporter', '', 'view')) {
    //     $CI->app_menu->add_sidebar_children_item('utilities', [
    //             'slug'     => 'bulk-pdf-exporter',
    //             'name'     => _l('bulk_pdf_exporter'),
    //             'href'     => admin_url('utilities/bulk_pdf_exporter'),
    //             'position' => 10,
    //     ]);
    // }

    // $CI->app_menu->add_sidebar_children_item('utilities', [
    //             'slug'     => 'calendar',
    //             'name'     => _l('als_calendar_submenu'),
    //             'href'     => admin_url('utilities/calendar'),
    //             'position' => 15,
    //     ]);


    // if (is_admin()) {
    //     $CI->app_menu->add_sidebar_children_item('utilities', [
    //             'slug'     => 'announcements',
    //             'name'     => _l('als_announcements_submenu'),
    //             'href'     => admin_url('announcements'),
    //             'position' => 20,
    //     ]);

    //     $CI->app_menu->add_sidebar_children_item('utilities', [
    //             'slug'     => 'activity-log',
    //             'name'     => _l('als_activity_log_submenu'),
    //             'href'     => admin_url('utilities/activity_log'),
    //             'position' => 25,
    //     ]);

    //     $CI->app_menu->add_sidebar_children_item('utilities', [
    //             'slug'     => 'ticket-pipe-log',
    //             'name'     => _l('ticket_pipe_log'),
    //             'href'     => admin_url('utilities/pipe_log'),
    //             'position' => 30,
    //     ]);
    // }

    // if (has_permission('reports', '', 'view')) {
    //     $CI->app_menu->add_sidebar_menu_item('reports', [
    //             'collapse' => true,
    //             'name'     => _l('als_reports'),
    //             'href'     => admin_url('reports'),
    //             'icon'     => 'fa fa-area-chart',
    //             'position' => 60,
    //     ]);
    //     $CI->app_menu->add_sidebar_children_item('reports', [
    //             'slug'     => 'sales-reports',
    //             'name'     => _l('als_reports_sales_submenu'),
    //             'href'     => admin_url('reports/sales'),
    //             'position' => 5,
    //     ]);
    //     $CI->app_menu->add_sidebar_children_item('reports', [
    //             'slug'     => 'expenses-reports',
    //             'name'     => _l('als_reports_expenses'),
    //             'href'     => admin_url('reports/expenses'),
    //             'position' => 10,
    //     ]);
    //     $CI->app_menu->add_sidebar_children_item('reports', [
    //             'slug'     => 'expenses-vs-income-reports',
    //             'name'     => _l('als_expenses_vs_income'),
    //             'href'     => admin_url('reports/expenses_vs_income'),
    //             'position' => 15,
    //     ]);
    //     $CI->app_menu->add_sidebar_children_item('reports', [
    //             'slug'     => 'leads-reports',
    //             'name'     => _l('als_reports_leads_submenu'),
    //             'href'     => admin_url('reports/leads'),
    //             'position' => 20,
    //     ]);

    //     if (is_admin()) {
    //         $CI->app_menu->add_sidebar_children_item('reports', [
    //                 'slug'     => 'timesheets-reports',
    //                 'name'     => _l('timesheets_overview'),
    //                 'href'     => admin_url('staff/timesheets?view=all'),
    //                 'position' => 25,
    //         ]);
    //     }

    //     $CI->app_menu->add_sidebar_children_item('reports', [
    //                 'slug'     => 'knowledge-base-reports',
    //                 'name'     => _l('als_kb_articles_submenu'),
    //                 'href'     => admin_url('reports/knowledge_base_articles'),
    //                 'position' => 30,
    //         ]);
    // }

// New Setup menu on 6th April 2020

    $CI->app_menu->add_setup_menu_item('Message Box', [
            'collapse' => true,
            'name'     => _l('Message Box'),
            'position' => 5,
    ]);

    $CI->app_menu->add_setup_children_item('Message Box', [
            'slug'     => 'notification_settings',
            'name'     => _l('Notification Settings'),
            'href'     => admin_url('notification_settings'),
            'position' => 5,
    ]);

    $CI->app_menu->add_setup_menu_item('Users', [
            'collapse' => true,
            'name'     => _l('Users'),
            'position' => 10,
    ]);

    $CI->app_menu->add_setup_children_item('Users', [
            'slug'     => 'users_levels',
            'name'     => _l('Users Levels'),
            'href'     => admin_url('users_levels'),
            'position' => 5,
    ]);

    $CI->app_menu->add_setup_menu_item('Accounts', [
            'collapse' => true,
            'name'     => _l('Accounts'),
            'position' => 15,
    ]);

    $CI->app_menu->add_setup_children_item('Accounts', [
            'slug'     => 'account_types',
            'name'     => _l('Account Types'),
            'href'     => admin_url('account_types'),
            'position' => 5,
    ]);

    $CI->app_menu->add_setup_menu_item('Production', [
            'collapse' => true,
            'name'     => _l('Production'),
            'position' => 20,
    ]);

    $CI->app_menu->add_setup_children_item('Production', [
            'slug'     => 'work_order_phases',
            'name'     => _l('Work Order Phases'),
            'href'     => admin_url('work_order_phases'),
            'position' => 5,
    ]);

    $CI->app_menu->add_setup_menu_item('Purchase', [
            'collapse' => true,
            'name'     => _l('Purchase'),
            'position' => 25,
    ]);

    $CI->app_menu->add_setup_children_item('Purchase', [
            'slug'     => 'purchase_order_phases',
            'name'     => _l('Purchase Order Phases'),
            'href'     => admin_url('purchase_order_phases'),
            'position' => 5,
    ]);

    $CI->app_menu->add_setup_menu_item('Warehouse', [
            'collapse' => true,
            'name'     => _l('Warehouse'),
            'position' => 30,
    ]);

    $CI->app_menu->add_setup_children_item('Warehouse', [
            'slug'     => 'warehouses',
            'name'     => _l('Warehouses'),
            'href'     => admin_url('warehouses'),
            'position' => 5,
    ]);

    $CI->app_menu->add_setup_children_item('Warehouse', [
            'slug'     => 'stock_categories',
            'name'     => _l('Stock Categories'),
            'href'     => admin_url('stock_categories'),
            'position' => 10,
    ]);

    $CI->app_menu->add_setup_children_item('Warehouse', [
            'slug'     => 'stock_units',
            'name'     => _l('Stock Units'),
            'href'     => admin_url('stock_units'),
            'position' => 15,
    ]);   

    $CI->app_menu->add_setup_menu_item('Sale', [
            'collapse' => true,
            'name'     => _l('Sale'),
            'position' => 35,
    ]);

    $CI->app_menu->add_setup_children_item('Sale', [
            'slug'     => 'pricing_categories',
            'name'     => _l('Pricing Categories'),
            'href'     => admin_url('pricing_categories'),
            'position' => 5,
    ]);

    $CI->app_menu->add_setup_children_item('Sale', [
            'slug'     => 'sale_phases',
            'name'     => _l('Sale Phases'),
            'href'     => admin_url('sale_phases'),
            'position' => 10,
    ]);

    $CI->app_menu->add_setup_menu_item('User Logs', [
                'name'     => _l('User Logs'),
                'href'     => admin_url('user_logs'),
                'position' => 40,
        ]);

    $CI->app_menu->add_setup_menu_item('Language', [
                'name'     => _l('Language'),
                'href'     => admin_url('language'),
                'position' => 45,
        ]);

// End of New Setup menu

//     // Setup menu
//     if (has_permission('staff', '', 'view')) {
//         $CI->app_menu->add_setup_menu_item('staff', [
//                     'name'     => _l('als_staff'),
//                     'href'     => admin_url('staff'),
//                     'position' => 5,
//             ]);
//     }

//     if (is_admin()) {
//         $CI->app_menu->add_setup_menu_item('customers', [
//                     'collapse' => true,
//                     'name'     => _l('clients'),
//                     'position' => 10,
//             ]);

//         $CI->app_menu->add_setup_children_item('customers', [
//                     'slug'     => 'customer-groups',
//                     'name'     => _l('customer_groups'),
//                     'href'     => admin_url('clients/groups'),
//                     'position' => 5,
//             ]);
//         $CI->app_menu->add_setup_menu_item('support', [
//                     'collapse' => true,
//                     'name'     => _l('support'),
//                     'position' => 15,
//             ]);

//         $CI->app_menu->add_setup_children_item('support', [
//                     'slug'     => 'departments',
//                     'name'     => _l('acs_departments'),
//                     'href'     => admin_url('departments'),
//                     'position' => 5,
//             ]);
//         $CI->app_menu->add_setup_children_item('support', [
//                     'slug'     => 'tickets-predefined-replies',
//                     'name'     => _l('acs_ticket_predefined_replies_submenu'),
//                     'href'     => admin_url('tickets/predefined_replies'),
//                     'position' => 10,
//             ]);
//         $CI->app_menu->add_setup_children_item('support', [
//                     'slug'     => 'tickets-priorities',
//                     'name'     => _l('acs_ticket_priority_submenu'),
//                     'href'     => admin_url('tickets/priorities'),
//                     'position' => 15,
//             ]);
//         $CI->app_menu->add_setup_children_item('support', [
//                     'slug'     => 'tickets-statuses',
//                     'name'     => _l('acs_ticket_statuses_submenu'),
//                     'href'     => admin_url('tickets/statuses'),
//                     'position' => 20,
//             ]);

//         $CI->app_menu->add_setup_children_item('support', [
//                     'slug'     => 'tickets-services',
//                     'name'     => _l('acs_ticket_services_submenu'),
//                     'href'     => admin_url('tickets/services'),
//                     'position' => 25,
//             ]);
//         $CI->app_menu->add_setup_children_item('support', [
//                     'slug'     => 'tickets-spam-filters',
//                     'name'     => _l('spam_filters'),
//                     'href'     => admin_url('spam_filters/view/tickets'),
//                     'position' => 30,
//             ]);

//         $CI->app_menu->add_setup_menu_item('leads', [
//                     'collapse' => true,
//                     'name'     => _l('acs_leads'),
//                     'position' => 20,
//             ]);
//         $CI->app_menu->add_setup_children_item('leads', [
//                     'slug'     => 'leads-sources',
//                     'name'     => _l('acs_leads_sources_submenu'),
//                     'href'     => admin_url('leads/sources'),
//                     'position' => 5,
//             ]);
//         $CI->app_menu->add_setup_children_item('leads', [
//                     'slug'     => 'leads-statuses',
//                     'name'     => _l('acs_leads_statuses_submenu'),
//                     'href'     => admin_url('leads/statuses'),
//                     'position' => 10,
//             ]);
//         $CI->app_menu->add_setup_children_item('leads', [
//                     'slug'     => 'leads-email-integration',
//                     'name'     => _l('leads_email_integration'),
//                     'href'     => admin_url('leads/email_integration'),
//                     'position' => 15,
//             ]);
//         $CI->app_menu->add_setup_children_item('leads', [
//                     'slug'     => 'web-to-lead',
//                     'name'     => _l('web_to_lead'),
//                     'href'     => admin_url('leads/forms'),
//                     'position' => 20,
//             ]);

//         $CI->app_menu->add_setup_menu_item('finance', [
//                     'collapse' => true,
//                     'name'     => _l('acs_finance'),
//                     'position' => 25,
//             ]);
//         $CI->app_menu->add_setup_children_item('finance', [
//                     'slug'     => 'taxes',
//                     'name'     => _l('acs_sales_taxes_submenu'),
//                     'href'     => admin_url('taxes'),
//                     'position' => 5,
//             ]);
//         $CI->app_menu->add_setup_children_item('finance', [
//                     'slug'     => 'currencies',
//                     'name'     => _l('acs_sales_currencies_submenu'),
//                     'href'     => admin_url('currencies'),
//                     'position' => 10,
//             ]);
//         $CI->app_menu->add_setup_children_item('finance', [
//                     'slug'     => 'payment-modes',
//                     'name'     => _l('acs_sales_payment_modes_submenu'),
//                     'href'     => admin_url('paymentmodes'),
//                     'position' => 15,
//             ]);
//         $CI->app_menu->add_setup_children_item('finance', [
//                     'slug'     => 'expenses-categories',
//                     'name'     => _l('acs_expense_categories'),
//                     'href'     => admin_url('expenses/categories'),
//                     'position' => 20,
//             ]);

//         $CI->app_menu->add_setup_menu_item('contracts', [
//                     'collapse' => true,
//                     'name'     => _l('acs_contracts'),
//                     'position' => 30,
//             ]);
//         $CI->app_menu->add_setup_children_item('contracts', [
//                     'slug'     => 'contracts-types',
//                     'name'     => _l('acs_contract_types'),
//                     'href'     => admin_url('contracts/types'),
//                     'position' => 5,
//             ]);

//         $modules_name = _l('modules');

//         if ($modulesNeedsUpgrade = $CI->app_modules->number_of_modules_that_require_database_upgrade()) {
//             $modules_name .= '<span class="badge menu-badge bg-warning">' . $modulesNeedsUpgrade . '</span>';
//         }

//         $CI->app_menu->add_setup_menu_item('modules', [
//                     'href'     => admin_url('modules'),
//                     'name'     => $modules_name,
//                     'position' => 35,
//             ]);

//         $CI->app_menu->add_setup_menu_item('custom-fields', [
//                     'href'     => admin_url('custom_fields'),
//                     'name'     => _l('asc_custom_fields'),
//                     'position' => 45,
//             ]);

//         $CI->app_menu->add_setup_menu_item('gdpr', [
//                     'href'     => admin_url('gdpr'),
//                     'name'     => _l('gdpr_short'),
//                     'position' => 50,
//             ]);

//         $CI->app_menu->add_setup_menu_item('roles', [
//                     'href'     => admin_url('roles'),
//                     'name'     => _l('acs_roles'),
//                     'position' => 55,
//             ]);

// /*             $CI->app_menu->add_setup_menu_item('api', [
//                           'href'     => admin_url('api'),
//                           'name'     => 'API',
//                           'position' => 65,
//                   ]);*/

//     }

//     if (has_permission('settings', '', 'view')) {
//         $CI->app_menu->add_setup_menu_item('settings', [
//                     'href'     => admin_url('settings'),
//                     'name'     => _l('acs_settings'),
//                     'position' => 200,
//             ]);
//     }

//     if (has_permission('email_templates', '', 'view')) {
//         $CI->app_menu->add_setup_menu_item('email-templates', [
//                     'href'     => admin_url('emails'),
//                     'name'     => _l('acs_email_templates'),
//                     'position' => 40,
//             ]);
//     }
}
