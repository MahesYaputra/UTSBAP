<div class="form-group {{ $errors->has('studentID') ? 'has-error' : ''}}">
    <label for="studentID" class="control-label">{{ 'Studentid' }}</label>
    <input class="form-control" name="studentID" type="text" id="studentID" value="{{ isset($sertifikat->studentID) ? $sertifikat->studentID : ''}}" >
    {!! $errors->first('studentID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('judulsertifikat') ? 'has-error' : ''}}">
    <label for="judulsertifikat" class="control-label">{{ 'Judulsertifikat' }}</label>
    <input class="form-control" name="judulsertifikat" type="text" id="judulsertifikat" value="{{ isset($sertifikat->judulsertifikat) ? $sertifikat->judulsertifikat : ''}}" >
    {!! $errors->first('judulsertifikat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('penyelenggara') ? 'has-error' : ''}}">
    <label for="penyelenggara" class="control-label">{{ 'Penyelenggara' }}</label>
    <input class="form-control" name="penyelenggara" type="text" id="penyelenggara" value="{{ isset($sertifikat->penyelenggara) ? $sertifikat->penyelenggara : ''}}" >
    {!! $errors->first('penyelenggara', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tahun') ? 'has-error' : ''}}">
    <label for="tahun" class="control-label">{{ 'Tahun' }}</label>
    <input class="form-control" name="tahun" type="text" id="tahun" value="{{ isset($sertifikat->tahun) ? $sertifikat->tahun : ''}}" >
    {!! $errors->first('tahun', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
