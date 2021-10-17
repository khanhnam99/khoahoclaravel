<?php

namespace App\Http\Requests\Backend\Posts;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Lang;
//use Illuminate\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Exceptions\HttpResponseException;

class PostRequest extends FormRequest
{
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
        return [
            'locales.vi.name' => 'bail|required|max:255',
            'locales.en.name' => 'bail|required|max:255',
        ];
    }

    public function messages(){
        return [
            'locales.vi.name.required' => Lang::get('category/create.name'),
            'locales.en.name.required' => Lang::get('account/create.enter_full_name'),
        ];
    }

    public function withValidator($validator){
       // return back()->withInput();
    }
    protected function failedValidation(Validator $validator)
    {
       // return back()->withInput();
//        return redirect()->to($this->getRedirectUrl())
//            ->withInput($request->input())
//            ->withErrors($errors, $this->errorBag());
//
        throw (new ValidationException($validator))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }


}
