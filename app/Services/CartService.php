<?php

namespace App\Service;

use Auth;
use App\Models\CartItem;

class CartService
{
    public function get()
    {
       return Auth::user()->cateItems()->with(['productSku.product'])->get();
    }

    public function add($skuId,$amount)
    {
       $user = Auth::user();
       //从数据库中查询该商品是否已经在购物车中
        if ($item = $user->cateItems()->where('product_sku_id',$skuId)->first()){
            $item->update([
                'amount'=>$this->amount + $amount,
            ]);
        }else{
            // 否则创建一个新的购物车记录
            $item = new CartItem(['amount'=>$amount]);
            $item->user()->associate($user);
            $item->product()->associate($skuId);
            $item->save();
        }

        return $item;

    }

    public function remove($skuIds)
    {
        //可以传单个ID，也可以传 ID 数组
        if (!is_array($skuIds)){
            $skuIds = [$skuIds];
        }

        Auth::user()->cartItems()->whereIn('product_sku_id',$skuIds)->delete();
    }
}