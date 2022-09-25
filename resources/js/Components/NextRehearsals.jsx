import React from 'react';

export default function NextRehearsals(props) {
    const now = new Date();
    const rehearsals = props.rehearsals.filter(r => {
        const date = new Date(r.date);
        return date > now;
    }).splice(0,3).map(r => {
        return (
        <div className='m-10  bg-slate-50 w-60' key={r.id}>
            <div className='border-2 p-4'>
                <h2>{new Date(r.date).toLocaleDateString('de-DE', { weekday: 'long'})}</h2>
                <h2>{new Date(r.date).toLocaleDateString('de-DE')}</h2>
            </div>
            <div className='p-4 border-2'>
                {r.program}
            </div>
        </div>
        )});
    return (
        <div className='p-6'>
            <h2>Die nächsten Proben:</h2>
            <div className='flex flex-wrap'>
                {rehearsals}
            </div>
        </div>
    );
}