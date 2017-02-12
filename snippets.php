<?php

//doctrine dump
error_log(\Doctrine\Common\Util\Debug::dump($x, 3, true, false));

//shopware db interaction
Shopware()->Db()->fetchAll($sql);
Shopware()->Db()->fetchOne($sql);
Shopware()->Db()->executeUpdate($sql);




?>
