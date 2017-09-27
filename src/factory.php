<?php
namespace coinbalance;

interface Factory {

    function getCoin($coinCode);

    function getCache();

    function getOptions();

}