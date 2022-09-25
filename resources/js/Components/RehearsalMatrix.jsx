import React, { useState } from 'react';

export default function RehearsalMatrix(props) {
    const [users, setUsers] = useState(props.users);
    console.log({users});
    const changeState = (user, rehearsalId) => {
        if (!props.editable) {
            return;
        }
        // cycle through rehearsal status 0 -> 1 -> 2 -> 0
        if (!user.rehearsals[rehearsalId]) user.rehearsals[rehearsalId] = 0;
        user.rehearsals[rehearsalId] = (user.rehearsals[rehearsalId] + 1) % 3;

        const newUsers = users.map(u => u.id === user.id ? user : u);

        setUsers(newUsers);
    }

    const rehearsalsHead = props.rehearsals.map(r => {
        const date = new Date(r.date).toLocaleDateString();
        return (
            <th className='p-2' key={r.id}>{date}</th>
        )
    });

    const userRows = users.map((u, userIndex) => {
        const rehearsalCells = props.rehearsals.map((r, rehearsalId) => {
            let color = 'bg-white';
            if (!u.rehearsals[rehearsalId]) {
                color = 'bg-white';
            } else {
                color = ['bg-white', 'bg-red-500', 'bg-green-500'][u.rehearsals[rehearsalId]];
            }
            
            const classname ='w-4 h-4 p-0 self-center border-2 border-gray-500 ' + color;
            return <td key={r.id} onClick={changeState.bind(this, u, rehearsalId)}><div className={classname} style={{'margin': '0 auto'}}></div></td>
        });
        return (
            <tr className='hover:bg-sky-50' key={userIndex}>
                <td className='text-left'>{u.name} {u.activated ? '' : '(nicht aktiviert)'}</td>
                {rehearsalCells}
            </tr>
        );
    });
    const buttonStore = props.editable 
    ? <button className='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full' 
        onClick={() => { 
        props.storeUsers(users.pop());
    }}>Speichern</button> : '';

    return (
        <div>
            <table
                className='table-auto w-full text-sm'>
                <thead>
                    <tr>
                        <th className='text-left'>Name</th>
                        {rehearsalsHead}
                    </tr>
                </thead>
                <tbody>
                    {userRows}
                </tbody>
            </table>
            {buttonStore}
        </div>
    );
}