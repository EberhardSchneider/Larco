import React from 'react';
import RehearsalsEdit from '@/Components/RehearsalsEdit';
import Authenticated from '@/Layouts/Authenticated';
import { Inertia } from '@inertiajs/inertia'
import { Head } from '@inertiajs/inertia-react';


export default function Presence(props) {
    const userRehearsals = JSON.parse(props.user.rehearsals);
    const user = {...props.user, rehearsals: userRehearsals};
    function storeUser(user) {
        Inertia.post('user/store', user);
    };
    
    return (
        <Authenticated
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Probenanwesenheit</h2>}>
            <Head title="Probenanwesenheit" />
            <RehearsalsEdit 
                user={user} 
                rehearsals={props.rehearsals}
                editable={true}
                storeUsers={storeUser}>
            </RehearsalsEdit>
        </Authenticated>
    );
}