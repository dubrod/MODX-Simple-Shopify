<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License (MIT)

Copyright (c) 2016 MODX Systems, LLC (hello@modx.com)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
',
    'readme' => '# MODX-Simple-Shopify
KnockoutJS Powered, drop-in package to display your Shopify Products Feed with a Cart
',
    'changelog' => '# Simple Shopify for MODX 1.0.2
 - Create a backup chunk with the products.json feed in it so broken cUrl has a backup.
 - Altered Snippet to get chunk backup if feed is empty.

# Simple Shopify for MODX 1.0.1
 - changed quantity input type to "number"
 - added a button to "empty the cart" if anything ever gets stuck
 - added my table CSS

# Simple Shopify for MODX 1.0.0
 - Initial Build
',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '70628b97acd95ed5702a2ca29c7dc270',
      'native_key' => 'simpleshopify',
      'filename' => 'modNamespace/8b6ca36abe9ccd53055ad25b0a80c350.vehicle',
      'namespace' => 'simpleshopify',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd1fa4a2eaad97b0da0c6b112dfbf1593',
      'native_key' => 'simpleshopify.shopify_key',
      'filename' => 'modSystemSetting/ba159e983789e536d4502f2c797e5a0a.vehicle',
      'namespace' => 'simpleshopify',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b826eb87c3d35d72b292a0a21f11ab1a',
      'native_key' => 'simpleshopify.shopify_domain',
      'filename' => 'modSystemSetting/2512d94b8767383e5362192493392d94.vehicle',
      'namespace' => 'simpleshopify',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9e50270aa601cb8ba623259280dd5507',
      'native_key' => 'simpleshopify.shopify_token',
      'filename' => 'modSystemSetting/29c5109cc0c62f61a6713254034f7b2f.vehicle',
      'namespace' => 'simpleshopify',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '94c65a445674be5a4488f82f7e893782',
      'native_key' => 'simpleshopify.shopify_password',
      'filename' => 'modSystemSetting/1fc3e9e45d93c59e2b30cc2dd5022e80.vehicle',
      'namespace' => 'simpleshopify',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'dd7aaa54913cfb88337491055bc9f15e',
      'native_key' => NULL,
      'filename' => 'modCategory/7b2519113ee2d4e761fbfc648d560bd9.vehicle',
      'namespace' => 'simpleshopify',
    ),
  ),
);