<?php
namespace Framadate\Services;

use Framadate\FramaDB;

/**
 * The class provides action for application administrators.
 *
 * @package Framadate\Services
 */
class SuperAdminService {

    private $connect;

    function __construct(FramaDB $connect) {
        $this->connect = $connect;
    }

    /**
     * Return the list of all polls.
     *
     * @param array $search Array of search : ['id'=>..., 'title'=>..., 'name'=>...]
     * @param int $page The page index (O = first page)
     * @param int $limit The limit size
     * @return array ['polls' => The {$limit} polls, 'count' => Entries found by the query, 'total' => Total count]
     */
    public function findAllPolls($search, $page, $limit) {
        return $this->connect->findAllPolls($search, $page * $limit, $limit);
    }

}
 