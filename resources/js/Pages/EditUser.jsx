import React, { useState } from 'react';
import RehearsalMatrix from '@/Components/RehearsalMatrix';
import Authenticated from '@/Layouts/Authenticated';
import { Head } from '@inertiajs/inertia-react';
import EditUserForm from './EditUserForm';

export default function EditUser(props) {
    const [values, setValues] = useState({
        name: props.name
    })

    function handleChange(e) {
        const key = e.target.id;
        const value = e.target.value;
        setValues(values => ({
            ...values,
            [key]: value,
        }));
    }

    function handleSubmit(e) {
        e.preventDefault();
        Inertia.post('users', values);
    }

    return (
        <Authenticated
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Daten editieren</h2>}>
            <EditUserForm {...props}></EditUserForm>
        </Authenticated>
    );
}