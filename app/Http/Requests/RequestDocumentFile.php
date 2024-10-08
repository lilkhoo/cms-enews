<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestDocumentFile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'document_category_id' => 'required|exists:document_categories,id',
            'file' => 'mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,txt|max:2048',
        ];

        if ($this->isMethod('post')) {
            $rules['file'] = 'required|' . $rules['file'];
        }

        return $rules;
    }
}
