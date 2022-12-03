<?php
public function process() {
    $post = $this->input->post(null, TRUE);
    if (isset($post['login'])) {
        $this->load->model('m_user');
        $query = $this->m_user->login($post);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $params = array(
                'userid' => $row->id_user,
                'level' => $row->level
            );
            $this->session->set_userdata($params);
            echo "<script>alert('Login success');</script>";

            if($row->level == 1) // Level condition to redirect specific page with example level 1
                redirect('/pageX');
            else if($row->level == 2) // Level condition to redirect specific page with example level 2
                redirect('/pageY');
            //... more levels = more conditions
        } else {
            echo "<script>alert('Login failed, wrong username/password');</script>";
            redirect(site_url('auth/login'));
        }
    }
}
