import React, { useState } from 'react';
import { Inertia } from '@inertiajs/inertia'
import RehearsalMatrix from '@/Components/RehearsalMatrix';
import Authenticated from '@/Layouts/Authenticated';
import { Head } from '@inertiajs/inertia-react';

export default function EditUserForm(props) {
    const [values, setValues] = useState({
        id: props.id,
        name: props.name ?? '',
        address: props.address ?? '',
        instrumentId: props.instrument_id ?? '',
        phone: props.phone ?? '',
        mobile: props.mobile ?? ''
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
        Inertia.post('edit-user', values);
    }

    const instruments = props.instruments.map( (i, index) => {
        return <option value={index+1} key={index} selected={props.instrument_id === index+1}>{i}</option>
    });

    return (
        <div className="block p-6 rounded-lg shadow-lg bg-white  w-2/3 mt-8 mx-auto">
            <form onSubmit={handleSubmit} className="form-group mb-6">
                <label htmlFor='name' className='form-label inline-block mb-2 text-gray-700'>Name:</label>
                <input id='name' value={values.name} onChange={handleChange} 
                className="form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                mb-3
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"/>
                <label htmlFor='instruments' className='form-label inline-block mb-2 text-gray-700'>Instrument:</label>
                <select name='instruments' 
                    id='instrumentId' 
                    value={values.instrument_id}
                    onChange={handleChange} 
                className="form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                mb-3
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                {instruments}
                </select>
                <label htmlFor='address' className='form-label inline-block mb-2 text-gray-700'>Adresse:</label>
                <input id='address' value={values.address} onChange={handleChange} 
                className="form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                mb-3
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"/>
                <label htmlFor='phone' className='form-label inline-block mb-2 text-gray-700'>Telefon:</label>
                <input id='phone' value={values.phone} onChange={handleChange} 
                className="form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                mb-3
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"/>
                <label htmlFor='mobile' className='form-label inline-block mb-2 text-gray-700'>Mobil:</label>
                <input id='mobile' value={values.mobile} onChange={handleChange} 
                className="form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                mb-3
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"/>
                <button type="submit">Speichern</button>
            </form>
        </div>
    );
}