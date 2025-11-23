<?php
/**
 * 지점 데이터 저장 API
 * POST로 전송된 JSON 데이터를 branch_data.json 파일에 저장합니다.
 */

header('Content-Type: application/json; charset=utf-8');

// POST 데이터 받기
$input = file_get_contents('php://input');
$newBranch = json_decode($input, true);

if (!$newBranch) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid JSON data']);
    exit;
}

// 데이터 파일 경로
$dataFile = __DIR__ . '/branch_data.json';

// 기존 데이터 읽기
$branches = [];
if (file_exists($dataFile)) {
    $content = file_get_contents($dataFile);
    $branches = json_decode($content, true);
    if (!is_array($branches)) {
        $branches = [];
    }
}

// 새 데이터 추가
$branches[] = $newBranch;

// JSON 파일로 저장
$jsonData = json_encode($branches, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
$result = file_put_contents($dataFile, $jsonData);

if ($result === false) {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to save data']);
    exit;
}

// 성공 응답
echo json_encode(['success' => true, 'message' => 'Branch saved successfully']);
?>
