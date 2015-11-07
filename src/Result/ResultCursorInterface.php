<?php

/**
 * This file is part of the GraphAware Neo4j Common package.
 *
 * (c) GraphAware Limited <http://graphaware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Result;

use GraphAware\Common\Cypher\StatementInterface;
use GraphAware\Common\Result\RecordViewInterface;

interface ResultCursorInterface
{
    public function __construct(StatementInterface $statement);

    public function addRecord(RecordViewInterface $record);

    public function summarize();

    public function updateStatistics();

    public function statementType();

    public function hasSummary();

    public function isOpen();

    public function close();

    public function next();

    public function position();

    public function skip();

    public function isLast();

    public function first();

    public function single();

    public function last();
}