<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    //驗證規則可自己新增需要驗證的欄位
    protected $rules = [
        'user.name' => 'required|between:1,10',
        'user.email' => 'required|email|unique:users,email',
        'user.password' => 'required|alpha_num|between:8,20|confirmed',
        'user.password_confirmation' => 'required',
        'user.phone' => 'required|digits:10',
    ];
    //這裡我只寫了部分欄位，可以定義全部欄位
    protected $strings_key = [
        'user.name' => '使用者名稱',
        'user.email' => '信箱',
        'user.password' => '密碼',
        'user.password_confirmation' => '確認密碼',
        'user.phone' => '電話'
    ];
    //這裡我只寫了部分情況，可以按需定義
    protected $strings_val = [
        'required' => '為必填項',
        'between' => '長度需介在:min到:max之間',
        'integer' => '必須為整數',
        'alpha_num' => '只允許字母、數字',
        'email' => '格式不符',
        'confirmed' => '兩次密碼輸入不一致',
        'digits' => '必須為整數且長度為10',
        'unique' => '已註冊過',
    ];
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = $this->rules;
        return $rules;
    }

    public function messages()
    {
        $rules = $this->rules();
        $k_array = $this->strings_key;
        $v_array = $this->strings_val;
        foreach ($rules as $key => $value) {
            $new_arr = explode('|', $value); //分割成陣列
            foreach ($new_arr as $k => $v) {
                $head = strstr($v, ':', true); //擷取:之前的字串
                if ($head) {
                    $v = $head;
                }
                $array[$key . '.' . $v] = $k_array[$key] . $v_array[$v];
            }
        }
        return $array;
    }
}
