@extends('dashboard.layouts.default')
@section('title',"Contact Us")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card dz-card" id="accordion-one">
                    <div class="card-header flex-wrap">
                        <div>
                            <h4 class="card-title">Contact us messages</h4>
                        </div>
                        <a href="{{ route('dashboard.tags.create') }}" type="button" class="btn btn-primary">Add Tag<span
                                class="btn-icon-end">
                                <i class="fa-solid fa-plus fa-lg"></i>
                            </span>
                        </a>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table id="example3" class="display table datatables-bordered"
                                style="min-width: 845px;border-spacing: 1rem 1em !important;
                    border-collapse: separate;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Subjecct</th>
                                        <th>Message</th>
                                        <th>Whatsapp Reply</th>
                                        <th>Admin replied</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messages as $message)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $message->name }}
                                            </td>
                                            <td>
                                                {{ $message->email }}
                                            </td>
                                            <td>
                                                {{ $message->phone }}
                                            </td>
                                            <td>
                                                {{ $message->subject }}
                                            </td>
                                            <td>
                                                {!! $message->message !!}
                                            </td>
                                            <td>
                                                {!! $message->whatssapp_reply ? $message->whatssapp_reply : 'no replies yet' !!}
                                            </td>
                                            
                                            <td>
                                                {{ $message?->admin?->user?->full_name ?? 'no replies yet' }}
                                            </td>
                                            
                                            <td>
                                                @if ($message->whatssapp_reply==null)
                                                <a href="{{ route('dashboard.contact-us.edit', $message->id) }}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                @endif
                                                <form action="{{ route('dashboard.contact-us.destroy', $message->id) }}" method="POST" id="deleteForm-{{ $message->id }}" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm delete-btn" onclick="confirmDelete('deleteForm-{{ $message->id }}', 'You will not be able to recover this Message!');">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
