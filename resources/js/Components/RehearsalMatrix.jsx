import React from 'react';

export default function RehearsalMatrix({ users, rehearsals }) {
    console.log({ users, rehearsals });
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
            <tr className='hover:bg-gray-100'>
                <td className='text-left'>{u.name} {u.activated ? '' : '(nicht aktiviert)'}</td>
                {rehearsalCells}
            </tr>
        );
    });
    return (
        <table
            className='table-auto w-full text-sm'>
            <thead>
                <th className='text-left'>Name</th>
                {rehearsalsHead}
            </thead>
            <tbody>
                {userRows}
            </tbody>
        </table>
    );
}