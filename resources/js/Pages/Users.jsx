import React from 'react';
import RehearsalMatrix from '@/Components/RehearsalMatrix';
import Authenticated from '@/Layouts/Authenticated';
import { Head } from '@inertiajs/inertia-react';

export default function Users(props) {
    const musicians = props.users.map((u, index) => {
    return <tr key={index}><td>{u.name}</td><td>{u.instrument}</td></tr>
});
    return ( 
        <div>
        <h1>Alle Musiker</h1>
        <table>
            
                {musicians}
        </table>
        <RehearsalMatrix></RehearsalMatrix>

        </div>
    );
}