$(document).ready(function() {
    $('#form').validate({
      rules:{
        name: 'required',
        department_id: 'required',
        patient_code: 'required',
        agreed_salary: 'required',
        annual_increment: 'required',
        contact_number: 'required',
        salary_period_from: 'required',
        salary_period_to: 'required',
        email: 'required',
        password: 'required',
        confirm_password: 'required',
        department_name: 'required',
        department_description: 'required',
        age: 'required',
        county: 'required',
        gender: 'required',
        marital_status: 'required',
        occupation: 'required',
        language: 'required',
        religion: 'required',
        guardian_name: 'required',
        guardian_contact: 'required',
        relationship: 'required',
        patient_source: 'required',
        assigned_doctor_id: 'required',
        commission_amount:{
          required: '#commission:checked'
        },
        paid_to:{
          required: '#commission:checked'
        }

      },
      messages:{
        patient_name: 'please enter patient name',
      }
    });
  });
