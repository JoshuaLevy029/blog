<?php
    if(!function_exists('messages')) {
        function messages() {
            return [
                'required' => 'O campo :attributes é obrigatório',
                'email' => 'O campo :attributes deve ser um e-mail válido',
                'alpha' => 'O campo :attributes deve possuir somente letras',
                'alpha_num' => 'O campo :attributes deve possuir somente letras e números',
                'same' => 'Os campos :attributes e :other devem ser idênticos',
                'between' => 'O valor :input do campo :attributes deve estar entre: :min - :max',
                'in' => 'O campo :attributes deve ser um destes: :values',
                'date_format' => 'O formato do campo :attributes é \':format\'',
                'digits' => 'O campo :attributes é numérico e deve possuir exatamente :value digitos',
                'different' => 'O campo :attributes deve ser diferente do campo :field',
                'digits_between' => 'O campo :attributes é numérico e deve possuir entre :min e :max digitos',
                'file' => 'O campo :attributes deve ser um arquivo',
                'image' => 'O campo :attributes deve ser uma imagem (png, jpg, jpeg, gif, webp)',
                'integer' => 'O campo :attributes é numérico inteiro',
                'max' => 'O campo :attributes deve possuir um valor menor ou igual a :value',
                'min' => 'O campo :attributes deve possuir um valor maior ou igual a :value',
                'mimes' => 'O campo :attributes de possuir arquivos dos tipos: :values',
                'not_in' => 'O campo :attributes não deve ser um destes: :values',
                'numeric' => 'O campo :attributes é numérico',
                'password' => 'O campo :attributes é uma senha válida',
                'required_if' => 'O campo :attributes é obrigatório se o campo :anotherfield for igual a :value',
                'required_unless' => 'O campo :attributes é obrigatório a não ser que o campo :anotherfield for igual a :value',
                'required_with' => 'O campo :attributes é obrigatório se um dos campos (:values) estiverem presentes',
                'required_with_all' => 'O campo :attributes é obrigatório somente se todos os campos (:values) estiverem presentes',
                'required_without' => 'O campo :attributes é obrigatório se um dos campos (:values) não estiver presente',
                'required_without_all' => 'O campo :attributes é obrigatório somente se todos os campos (:values) não estiverem presentes',
                'size' => 'O campo :attributes deve possuir seu tamanho igual a :value',
                'string' => 'O campo :attributes é do tipo texto',
                'gt' => 'O campo :attributes deve ser maior que o campo :field',
                'gte' => 'O campo :attributes deve ser maior ou igual ao campo :field',
                'filled' => 'O campo :attributes não pode estar vazio quando presente',
                'lt' => 'O campo :attributes deve ser menor que o campo :field',
                'lte' => 'O campo :attributes deve ser menor ou igual ao campo :field',
                'bool' => 'O campo :attributes deve ser verdadeiro ou falso, 0 ou 1, sim ou não'
            ];
        }
    }
?>