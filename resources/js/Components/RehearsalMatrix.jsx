import React from 'react';

export default function RehearsalMatrix({ users, rehearsals }) {
    // const users = [
    //     { name: 'Eberhard', rehearsals: [1,4] },
    //     { name: 'Beberhard', rehearsals: [2,3] },
    //     { name: 'Ceberhard', rehearsals: [1] },
    //     { name: 'Deberhard', rehearsals: [] },
    // ];
    // const rehearsals = [
    //     { id: 1, date: '2022-09-07' },
    //     { id: 2, date: '2022-09-10' },
    //     { id: 3, date: '2022-10-07' },
    //     { id: 4, date: '2022-11-17' },
    //     { id: 5, date: '2023-11-17' },

    // ]
    const rehearsalsHead = rehearsals.map(r => {
        const date = new Date(r.date).toLocaleDateString();
        return (
            <th className='p-2'>{date}</th>
        )
    });

    const userRows = users.map(u => {
        const rehearsalCells = rehearsals.map(r => {
            const classname = 'w-4 h-4 self-center ' + (u.rehearsals.includes(r.id) ? 'bg-green-500' : 'bg-red-500');
            return <td><div className={classname} style={{'margin': '0 auto'}}></div></td>
        });
        return (
            <tr>
                <td className='text-center'>{u.name}</td>
                {rehearsalCells}
            </tr>
        );
    });
    return (
        <table
            className='table-auto w-full text-sm'>
            <thead>
                <th>Name</th>
                {rehearsalsHead}
            </thead>
            <tbody>
                {userRows}
            </tbody>
        </table>
    );
}