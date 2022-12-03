if($this->request->getMethod() == 'post') {
    $property = $this->request->getPost(); //Save array of POST data

    //Instantiate database model
    $property_model = new PropertyModel;
    $unit_model = new UnitModel;

    //Merge model validation rules for controller level validation
    $ctrlr_validation_rules = array_merge($property_model->validationRules, $unit_model->validationRules);

    //Perform validation at the controller level before starting transaction
    if($this->validate($ctrlr_validation_rules)) {
        $this->db->transStart(); //Begin Transaction

        $property_model->insert($property);
        $property['property_id'] = $property_model->getInsertUniqID();
        $unit_model->insert($property);

        $this->db->transComplete(); //End Transaction

        if($this->db->transStatus() === TRUE) {
            $data['property']->fill($property);
            session()->setFlashdata('success', $data['property']->property_name . ' added successfully!');
            return redirect()->to('/properties/' . $property_model->getInsertUniqID());
        }
    }
    $data['errors'] = $this->validator->getErrors();
} 