import React from 'react';
import RehearsalMatrix from '@/Components/RehearsalMatrix';
import Authenticated from '@/Layouts/Authenticated';
import { Head } from '@inertiajs/inertia-react';

export default function Project(props) {
    console.log(props);
    return (
        <Authenticated
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Projekt</h2>}>
                <Head title="Projekt" />
            <h2 dangerouslySetInnerHTML={{__html: props.project.program.replace(/\n/i, '<br/>')}}></h2>
            <RehearsalMatrix users={props.users} rehearsals={props.rehearsals} editable={false}></RehearsalMatrix>
        </Authenticated>
    );
}