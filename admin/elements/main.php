<?php
if (isset($_GET['action']) && $_GET['query']) {
    $temp = $_GET['action'];
    $query = $_GET['query'];
} else {
    $temp = '';
    $query = '';
}
switch ($temp) {
    case 'settings':
        switch ($query) {
            case '1':
                include 'pages/settings.php';
                include 'modules/shop/setting.php';
                break;
            default:
                include 'pages/settings.php';
                include 'modules/shop/setting.php';
                break;
        }
        break;

    case 'account':
        switch ($query) {
            case 'overview':
                include 'pages/account/overview.php';

                break;
            case 'settings':
                include 'pages/account/settings.php';
                include 'modules/admin/deactivate.php';
                include 'modules/admin/change_email.php';
                include 'modules/admin/change_password.php';
                include 'modules/admin/update_admin.php';
                break;
            default:
                include 'pages/account/overview.php';
                break;
        }
        break;

    case 'catalog':
        switch ($query) {
            case 'products':
                include 'pages/apps/ecommerce/catalog/products.php';
                include 'modules/catalog/delete_product.php';
                break;
            case 'brands':
                include 'pages/apps/ecommerce/catalog/brands.php';
                include 'modules/catalog/delete_brand.php';
                break;
            case 'categories':
                include 'pages/apps/ecommerce/catalog/categories.php';
                include 'modules/catalog/delete_category.php';
                break;
            case 'add-product':
                include 'pages/apps/ecommerce/catalog/add-product.php';
                include 'modules/catalog/add_product.php';
                break;
            case 'add-brand':
                include 'pages/apps/ecommerce/catalog/add-brand.php';
                include 'modules/catalog/add_brand.php';
                break;
            case 'add-category':
                include 'pages/apps/ecommerce/catalog/add-category.php';
                include 'modules/catalog/add_category.php';
                break;
            case 'edit-product':
                include 'pages/apps/ecommerce/catalog/edit-product.php';
                include 'modules/catalog/edit_product.php';
                break;
            case 'edit-brand':
                include 'pages/apps/ecommerce/catalog/edit-brand.php';
                include 'modules/catalog/edit_brand.php';
                break;
            case 'edit-category':
                include 'pages/apps/ecommerce/catalog/edit-category.php';
                include 'modules/catalog/edit_category.php';
                break;
            default:
                include 'pages/apps/ecommerce/catalog/products.php';
                include 'modules/catalog/delete_product.php';
                break;
        }
        break;

    case 'sales':
        switch ($query) {
            case 'listing':
                include 'pages/apps/ecommerce/sales/listing.php';
                break;
            case 'details':
                include 'pages/apps/ecommerce/sales/details.php';
                break;
            case 'edit-order':
                include 'pages/apps/ecommerce/sales/edit-order.php';
                break;
            case 'add-order':
                include 'pages/apps/ecommerce/sales/add-order.php';
                break;
            default:
                include 'pages/apps/ecommerce/sales/listing.php';
                break;
        }
        break;

    case 'customers':
        switch ($query) {
            case 'list':
                include 'pages/apps/ecommerce/customers/listing.php';
                include 'modules/customer/add_customer.php';
                include 'modules/customer/delete.php';
                break;
            case 'details':
                include 'pages/apps/ecommerce/customers/details.php';
                include 'modules/customer/change_password.php';
                include 'modules/customer/change_phone.php';
                include 'modules/customer/update_customer.php';
                break;
            default:
                include 'pages/apps/ecommerce/customers/listing.php';
                include 'modules/customer/add_customer.php';
                include 'modules/customer/delete.php';
                break;
        }
        break;

    case 'invoices':
        switch ($query) {
            case 'view':
                include 'pages/apps/invoices/invoice.php';
                break;
            case 'create':
                include 'pages/apps/invoices/create.php';
                break;
            default:
                include 'pages/apps/invoices/invoice.php';
                break;
        }
        break;

    case 'payments':
        switch ($query) {
            case 'list':
                include 'pages/apps/payments/payment.php';
                include 'elements/modules/payment/add_payment.php';
                include 'elements/modules/payment/delete_payment.php';
                break;
            default:
                include 'pages/apps/payments/payment.php';
                include 'elements/modules/payment/add_payment.php';
                include 'elements/modules/payment/delete_payment.php';
                break;
        }
        break;

    case 'shipping':
        switch ($query) {
            case 'list':
                include 'pages/apps/shipping/shipping.php';
                include 'elements/modules/shipping/add_shipping.php';
                include 'elements/modules/shipping/delete_shipping.php';
                break;
            default:
                include 'pages/apps/shipping/shipping.php';
                include 'elements/modules/shipping/add_shipping.php';
                include 'elements/modules/shipping/delete_shipping.php';
                break;
        }
        break;

    default:
        include("pages/dashboard.php");
        break;

}
?>