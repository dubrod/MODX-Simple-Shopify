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
    'changelog' => '# Simple Shopify for MODX 1.2.0
 - You must create a backup chunk *product-cache* with the products.json feed in it so broken cUrl has a backup.
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
      'guid' => '71cdd272f194410aa7d58ff3a3fd7fd9',
      'native_key' => 'simpleshopify',
      'filename' => 'modNamespace/eeb4a8d34b19612588eae16433f90ca9.vehicle',
      'namespace' => 'simpleshopify',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c1c4b6615db2954a42fac99c31ce8241',
      'native_key' => 'simpleshopify.shopify_key',
      'filename' => 'modSystemSetting/5d147cf379019d6f19804d6a2d75c5ca.vehicle',
      'namespace' => 'simpleshopify',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f217fac5c5d2958f8426fd006ad4541c',
      'native_key' => 'simpleshopify.shopify_domain',
      'filename' => 'modSystemSetting/8413bcecf9f73d6266f86d71ee887a6a.vehicle',
      'namespace' => 'simpleshopify',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9a9293be337325eb230858923865935b',
      'native_key' => 'simpleshopify.shopify_token',
      'filename' => 'modSystemSetting/1d76fa17bc503b2e4d6cf7004ec76a7a.vehicle',
      'namespace' => 'simpleshopify',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a19b5860f0632719aa9e3c0e4b29b777',
      'native_key' => 'simpleshopify.shopify_password',
      'filename' => 'modSystemSetting/896630d5822dc5dee86e13a628dbaba7.vehicle',
      'namespace' => 'simpleshopify',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '99e07aa8bea4759d2031f72f57d97152',
      'native_key' => NULL,
      'filename' => 'modCategory/63b6e486def83ea4e4403c7bab5b6f9e.vehicle',
      'namespace' => 'simpleshopify',
    ),
  ),
);