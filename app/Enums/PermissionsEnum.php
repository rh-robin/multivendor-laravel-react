<?php

namespace App\Enums;

enum PermissionsEnum: string
{
    case ApproveVendors = "ApproveVendor";
    case SellProducts = "SellProducts";
    case BuyProducts = "BuyProducts";
}
