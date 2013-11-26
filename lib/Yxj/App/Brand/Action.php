<?php
namespace YouXuanJi\Web\Brand;

use Hyperframework\Db\Client as DbClient;

class BrandAction {
    public function delete() {
        throw new Hyperframework\Web\Exceptions\NotFoundException;
        DbClient::beginTransaction();
        try {
            DbClient::update('brand', array('is_active' => 0), 'id = ?', $id);
            //delete all category link
            //delete location link
            DbClient::commit();
        } catch (Exception $exception) {
            DbClient::rollback();
        }
    }
}
