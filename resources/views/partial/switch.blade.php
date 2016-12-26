{{Form::checkbox($name, null, null, [
                            'class' => 'make-switch',
                            'data-on' => 'success',
                            'data-on-text' => isset($data['on']['text']) ? $data['on']['text'] : 'ON',
                            'data-off-text' => isset($data['off']['text']) ? $data['off']['text'] : 'OFF',
                            'data-on-color' => isset($data['on']['color']) ? $data['on']['color'] : 'success',
                            'data-off-color' => isset($data['off']['color']) ? $data['off']['color'] : 'danger',
                            'data-size' => 'small',
                            'checked' => isset($checked) ?: null,
                            'id' => isset($id) ? $id : null])}}