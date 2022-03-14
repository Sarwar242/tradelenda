@extends('admin.layouts.master')
@section('title','Update Loan')

@section('contents')
@include('admin.layouts.sidebar')

<main class="main">
    <section class="go-back-group d-flex justify-content-between">
        <h6 class="go-back font-weight-bold text-primary">
            <i class="fa fa-long-arrow-left pr-2"></i> Back
        </h6>
    </section>

    <section class="loan-view-title-bar page-title-bar d-flex flex-wrap justify-content-between">
        <h4 class="page-title font-weight-bold">
            <i class="fa fa-navicon pr-2 d-lg-none" style="cursor:pointer" onclick="openNav()"></i> Offer Letter
        </h4>
    </section>

    <div class="row no-gutters" id="loanOfferLetter">
        <section class="col-md-10">
            <h6 class="font-weight-bold">Date: {{$loan->created_at->format('d M Y')}}</h6>
            <h5 class="font-weight-bold mt-4">{{$loan->user->position}}</h5>
            <pre>
                {{$loan->user->business_address}}
            </pre>
            <h6 class="font-weight-bold">Attention: {{$loan->user->director}}, MD/CEO</h6>
            <p class="mt-3">Dear Sir,</p>
            <h6 class="font-weight-bold mt-3">
                OFFER FOR {{strtoupper($loan->reason)}} OF N{{$loan->amount}} (@php $f = new NumberFormatter("en", \NumberFormatter::SPELLOUT);
                        $f->setTextAttribute(\NumberFormatter::DEFAULT_RULESET, "%spellout-numbering-verbose");
                        echo strtoupper($f->format($loan->amount));
                @endphp ONLY)
            </h6>
            <p>
                Sequel to your application for a working capital facility, we are pleased to inform you that the Manager of Tradelenda has approved the request under the following terms and conditions:
            </p>
            <h6 class="font-weight-bold mt-3">
                SUMMARRY OF TERMS AND CONDITIONS:
            </h6>
            <p class="mt-3">
                <span class="h6">LENDER:</span> Tradelenda Limited
            </p>
            <p>
                <span class="h6">BORROWER:</span> {{Str::ucfirst($loan->user->business_name)}}
            </p>
            <p>
                <span class="h6">AMOUNT:</span> ₦{{number_format($loan->amount)}}
            </p>
            <p>
                <span class="h6">PURPOSE:</span> {{Str::ucfirst($loan->reason)}}
            </p>
            <p>
                <span class="h6">TENOR:</span> {{$loan->loan_tenor}}
            </p>
            <p>
                <span class="h6">REPAYMENT:</span> On demand and/or expiry of the facility whichever is earlier to an account provided by Tradelenda.
            </p>
            <p>
                <span class="h6">REPAYMENT SOURCE:</span> Cash flow from normal operations and/or any source acceptable to the Lender. (as approved)
            </p>
            <p>
                <span class="h6">SECURITY/SUPPORT:</span> Personal guarantee and notarized statement of networth of the MD/CEO.
            </p>
            <p>
                <span class="h6">PRICING:</span> {{$loan->interest}}% monthly interest
            </p>
            <p>
                <span class="h6">PAYABLE TO ACCOUNT:</span> Trade Lenda Com. Ltd.
            </p>
            <p>
                <span class="h6">ACCOUNT NO:</span> 1215738966
            </p>
            <p>
                <span class="h6">BANK:</span> Zenith Bank Plc.
            </p>

            <h6 class="font-weight-bold">OTHER CONDITIONS:</h6>
            <ol class="condition-list">
                <li>
                    Draw down on each cycle shall be at the Lender's discretion and upon full
                    liquidation of any outstanding on the account and satisfactory performance of the facility.
                </li>
                <li>
                    Borrower to allow lenders Representative unhindered access to its greenhouse for the purpose
                    of validating that the level of stock in place is sufficient to cover the Lenders exposure at any particular time.
                </li>
                <li>
                    This offer is subject to the condition that there shall be no material adverse change in the
                    financial condition of the Borrower prior to and in any event at any time before the disbursement of this facility.
                </li>
                <li>
                    The Lender reserves the right to refuse or withold disbursements under the facility without notice.
                </li>
                <li>
                    The Lender reserves the right to convert the facility into any money
                    Market instrument and/or sell the entire debt or portions of it at its discretion and without
                    recourse and/ or consent from the Borrower.
                </li>
                <li>
                    The Borrower is at liberty to repay all outstanding
                    obligations at any time during the validity of this facility.
                </li>
                <li>
                    The Borrower covenant and warrant
                    that the CBN shall have power to set-off the Borrowers indebtedness under this loon agreement
                    From all such monies and funds standing to the Borrowers credit/benefit in any and all such
                    accounts or from any other financial assets belonging to the Borrower and in the custody of any such bank.
                </li>
                <li>
                    The Borrower hereby waive any right of confidentially whether arising under common law or statute or in other manner
                    whatsoever and irrevocably agree that the Borrower shall not argue to the contrary
                    before any court of law, tribunal, administrative authority or any other body acting in any judicial or quasi-judicial capacity. All other rights of the Borrower are reserved.
                </li>
            </ol>
            <p>
                <span class="font-weight-bold">ASSIGNMENT:</span> This Offer Letter shall be binding and valid for the benefit of the Lender and of the Borrower as well as their respective successors and assigns such that the Borrower shall not assign or transfer its rights or obligations hereunder without the prior consent of the Lender in the writing. The Borrower shall immediately notify the Lender in the event that it is involved in or intends to be engaged In any scheme of merger, acquisition, divestiture or other business plan that may alter its ownership structure or business outlook howsoever that the Tradelenda may recall the loan or facility if in its pinion the merger, acquisition or business plan will impair to the ability of Borrower to repay the loan or facility.
            </p>
            <p>
                Notwithstanding the terms and conditions of this offer, the lender reserves the right to demand immediate repayment and/or alter the terms of any time at its sole discretion.
            </p>
            <p>
                Kindly signify your acceptance of this offer by signing and returning the counterpart copy of this letter to the Lender.
            </p>
            <p>
                This offer is open for acceptance within <span class="font-weight-bold">14 days of the date</span> of the offer after which it will lapse
            </p>
            <pre>
                Yours faithfully,
                For: <span class="font-weight-bold">Tradelenda</span>


                ---------------------------------------
            </pre>
            <h6 class="font-weight-bold text-center mt-4">MEMORANDUM OF ACCEPTANCE</h6>
            <p class="mt-4">
                The common seal of <span class="font-weight-bold"> {{strtoUpper($loan->user->business_name)}} </span> was hereunto affixed in acceptance of the terms and conditions of this offer in the presence off:
            </p>
            <div class="row mt-5 text-center director-signature-block">
                <section class="col">
                    <p class="mb-0 font-weight-bold">{{$loan->user->director}}</p>
                    <h6 class="d-inline font-weight-bold">DIRECTOR</h6>
                </section>
                <section class="col">
                    <p class="mb-0 font-weight-bold">{{$loan->user->secretary}}</p>
                    <h6 class="d-inline font-weight-bold"> DIRECTOR/SECRETARY</h6>
                </section>
            </div>
            <div class="d-flex flex-column align-items-center mt-4 mb-5">
                <img src="{{$loan->user->seal}}" alt="Company's Seal" class="img-fluid" width="100">
                <h6 class="font-weight-bold mt-3">AFFIX COMPANY'S SEAL</h6>
            </div>
            <form method="POST" action="{{route('letter.acknowledge', $loan->id)}}" class="col-md-5 col-sm-7 px-0">
                @csrf
                <div class="custom-control custom-checkbox mb-3 mt-4">
                    <input type="checkbox" class="custom-control-input" {{$loan->acknowledgement? 'checked':''}} disabled name="acknowledge" id="customCheck">
                    <label class="custom-control-label font-weight-bold" for="customCheck">
                        ACKNOWLEDGED AND AGREED TO SIGN DOCUMENT
                    </label>
                </div>
                {{-- <button type="submit" class="btn btn-block btn-primary">Submit</button> --}}
            </form>
        </section>
    </div>

</main>

@endsection
