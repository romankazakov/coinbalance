<?php
namespace coinbalance;

interface Coin {

    function getBalance(Options $options);

}