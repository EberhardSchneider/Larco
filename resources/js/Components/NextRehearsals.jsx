import React from 'react';

export default function NextRehearsals(props) {
    const now = new Date();
    const rehearsals = props.rehearsals.filter(r => {
        const date = new Date(r.date);
        return date > now;
    }).splice(0,3).map(r => {
        return <div className='m-10 p-2 bg-white'>
            <h2>{new Date(r.date).toLocaleDateString()}</h2>
            {r.program}
        </div>
    });
    return (
        <div className='flex'>
            <h2>Meine nächsten Proben:</h2>
            {rehearsals}
        </div>
    );
}