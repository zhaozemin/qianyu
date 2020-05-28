<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CouponCodeUnavailableException extends Exception
{
    public function __construct($message, int $code = 403)
    {
        parent::__construct($message,$code);
    }
    // 当这个一场被触发时，会调用render方法来输出给用户
    public function render(Request $request)
    {
        // 如果用户通过 Api 请求，则返回 JSON 格式的错误信息
        if ($request->expectsJson()) {
            return response()->json(['msg' => $this->message],$this->code);
        }

        // 否则返回上一页并带上错误信息
        return redirect()->back()->withErrors(['coupon'=>$this->message]);
    }
}
