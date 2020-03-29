<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions\MySql;

use CrEOF\Spatial\ORM\Query\AST\Functions\AbstractSpatialDQLFunction;

class STDistanceSphere extends AbstractSpatialDQLFunction {
    protected $platforms = array('mysql');
    protected $functionName = 'ST_Distance_SPHERE';
    protected $minGeomExpr = 2;
    protected $maxGeomExpr = 2;
}