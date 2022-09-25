import React, { useState } from 'react';

export default function RehearsalsEdit(props) {
    const [user, setUser] = useState(props.user);
    const changeState = (rehearsalId) => {
        if (!props.editable) {
            return;
        }
        // cycle through rehearsal status 0 -> 1 -> 2 -> 0
        if (!user.rehearsals[rehearsalId]) user.rehearsals[rehearsalId] = 0;
        user.rehearsals[rehearsalId] = user.rehearsals[rehearsalId] - 1;
        if (user.rehearsals[rehearsalId] < 0) user.rehearsals[rehearsalId] = 2;
        console.log(user.rehearsals);
        setUser({...user});
    }

    const rehearsalsHead = props.rehearsals.map(r => {
        const date = new Date(r.date).toLocaleDateString();
        return (
            <th className='p-2' key={r.id}>{date}</th>
        )
    });
    console.log(props.rehearsals);
    const rehearsalCells = props.rehearsals.map(r => {
        let color = 'bg-white';
        if (!user.rehearsals[r.id]) {
            color = 'bg-white';
        } else {
            color = ['bg-white', 'bg-red-500', 'bg-green-500'][user.rehearsals[r.id]];
        }
        
        const classname ='w-4 h-4 p-0 absolute border-2 top-4 right-4 border-gray-500 ' + color;
        return (
            <div className="w-72 h-32 bg-sky-50 p-4 mx-24 my-8 relative"
                key={r.id}
                onClick={changeState.bind(this, r.id)}>
                    <h2>{r.date}</h2>
                    <h2>{r.program}</h2>
                <div className={classname} 
                    style={{'margin': '0 auto'}}>
                </div>
            </div>
        )
    });


    const buttonStore = props.editable 
    ? <button className='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full' 
        onClick={() => { 
        props.storeUsers(user);
    }}>Speichern</button> : '';

    return (
        <div className="flex flex-row flex-wrap items-center justify-center">
            {rehearsalCells}
            {buttonStore}
        </div>
    );
}