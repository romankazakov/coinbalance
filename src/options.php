<?php
namespace coinbalance;

interface Options {

    function getAddress();

    function setAddress($address);

    function setOutputCurrency($currencyCode);

    function getOutputCurrency();

    function getConfirmedBlocks();

    function setConfirmedBlocks($blockCount);

}